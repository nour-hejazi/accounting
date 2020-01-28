<?php

namespace App\Http\Controllers\Admin;

use App\Bill;
use App\BillHistory;
use App\BillPayment;
use App\Expense;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BillPaymentController extends Controller
{
    public function addPayment(Request $request)
    {
        $data = $this->validate($request, [
            'amount' => 'required',
            'bill_id' => 'required',
        ]);

        $data['user_id'] = auth()->user()->id;

        BillPayment::create($data);

        $bill = Bill::find($data['bill_id']);

        $rest = $bill->rest - $data['amount'];
        $paid = $bill->paid + $data['amount'];
        $status = $bill->status;
        if($rest != 0){
            $status = Bill::BILL_STATUS_PARTIAL;
        }
        if($rest == 0){
            $status = Bill::BILL_STATUS_PAID;
        }

        Bill::where('id', $bill->id)->update([
            'rest' => $rest,
            'paid' => $paid,
            'status' => $status,
        ]);

        $history = [];
        $history['bill_id'] = $data['bill_id'];
        $history['amount'] = $data['amount'];
        if($rest != 0){
            $history['status'] = Bill::BILL_STATUS_PARTIAL;
        }
        if($rest == 0){
            $history['status'] = Bill::BILL_STATUS_PAID;
        }
        $history['description'] = trans('bills_histories.payment_added_and_payment_is') . " " . $history['amount'] ;
        BillHistory::create($history);


        session()->flash('success', trans('session.bill_payment_record_stored'));

        return redirect(adminUrl('bills/' . $data['bill_id']));

    }

    public function destroy($id)
    {
        $payment = BillPayment::find($id);
        BillPayment::find($payment->id)->delete();

        $bill = Bill::find($payment->bill->id);

        $paid = $payment->bill->paid - $payment->amount;
        $rest = $payment->bill->cost - $paid;

        $status = $payment->bill->status;
        if($rest == 0){
            $status = Bill::BILL_STATUS_PAID;
        }elseif($rest == $payment->bill->cost){
            $status = Bill::BILL_STATUS_DRAFT;
        }else{
            $status = Bill::BILL_STATUS_PARTIAL;
        }
        Bill::where('id', $bill->id)->update([
            'rest' => $rest,
            'paid' => $paid,
            'status' => $status,
        ]);

        $history = [];
        $history['bill_id'] = $payment->bill->id;
        $history['amount'] = $payment->amount;
        $history['status'] = $payment->bill->status;
        if($rest == 0){
            $history['status'] = Bill::BILL_STATUS_PAID;
        }elseif($rest == $payment->bill->cost){
            $history['status'] = Bill::BILL_STATUS_DRAFT;
        }else{
            $history['status'] = Bill::BILL_STATUS_PARTIAL;
        }
        $history['description'] = trans('bills_histories.payment_deleted_and_payment_is') . " " . $history['amount'] ;
        BillHistory::create($history);


        session()->flash('success', trans('session.bill_payment_record_deleted'));

        return redirect(adminUrl('bills/' . $payment->bill->id));

    }

}
