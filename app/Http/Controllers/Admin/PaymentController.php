<?php

namespace App\Http\Controllers\Admin;

use App\History;
use App\Invoice;
use App\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function addPayment(Request $request)
    {
        $data = $this->validate($request, [
            'amount' => 'required',
            'invoice_id' => 'required',
        ]);
        $invoice = Invoice::find($data['invoice_id']);
        $data['user_id'] = auth()->user()->id;
        $data['customer_id'] = $invoice->customer_id;
        Payment::create($data);


        $rest = $invoice->rest - $data['amount'];
        $paid = $invoice->paid + $data['amount'];
        $status = $invoice->status;
        if($rest != 0){
            $status = Invoice::INVOICE_STATUS_PARTIAL;
        }
        if($rest == 0){
            $status = Invoice::INVOICE_STATUS_PAID;
        }

        Invoice::where('id', $invoice->id)->update([
            'rest' => $rest,
            'paid' => $paid,
            'status' => $status,
        ]);


        $history = [];
        $history['invoice_id'] = $data['invoice_id'];
        $history['amount'] = $data['amount'];
        if($rest != 0){
            $history['status'] = Invoice::INVOICE_STATUS_PARTIAL;
        }
        if($rest == 0){
            $history['status'] = Invoice::INVOICE_STATUS_PAID;
        }
        $history['description'] = trans('invoices_histories.payment_added_and_payment_is') . " " . $history['amount'] ;
        History::create($history);




        session()->flash('success', trans('session.invoice_payment_record_stored'));

        return redirect(adminUrl('invoices/' . $data['invoice_id']));
    }


    public function destroy($id)
    {
        $payment = Payment::find($id);
        Payment::find($payment->id)->delete();

        $invoice = Invoice::find($payment->invoice->id);
        $paid = $payment->invoice->paid - $payment->amount;
        $sale_price_with_dis = $payment->invoice->sale_price_with_dis;
        $rest = $sale_price_with_dis - $paid;
        $status = $payment->invoice->status;
        if($rest == 0){
            $status = Invoice::INVOICE_STATUS_PAID;
        }elseif($rest == $sale_price_with_dis){
            $status = Invoice::INVOICE_STATUS_DRAFT;
        }else{
            $status = Invoice::INVOICE_STATUS_PARTIAL;
        }
        Invoice::where('id', $invoice->id)->update([
            'rest' => $rest,
            'paid' => $paid,
            'status' => $status,
        ]);

        $history = [];
        $history['invoice_id'] = $payment->invoice->id;
        $history['amount'] = $payment->amount;
        $history['status'] = $payment->invoice->status;
        if($rest == 0){
            $history['status'] = Invoice::INVOICE_STATUS_PAID;
        }elseif($rest == $sale_price_with_dis){
            $history['status'] = Invoice::INVOICE_STATUS_DRAFT;
        }else{
            $history['status'] = Invoice::INVOICE_STATUS_PARTIAL;
        }
        $history['description'] = trans('invoices_histories.payment_deleted_and_payment_is') . " " . $history['amount'] ;
        History::create($history);


        session()->flash('success', trans('session.invoice_payment_record_deleted'));

        return redirect(adminUrl('invoices/' . $payment->invoice->id));

    }





}
