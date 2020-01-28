<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\History;
use App\Invoice;
use App\Item;
use App\Payment;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PDF;

class InvoiceController extends Controller
{

    public function index()
    {
        $title = trans('titles.invoices_index');
        $invoices = Invoice::orderBy('created_at', 'desc')->get();

        return view('admin.invoices.index', compact(
            'title', 'invoices'
        ));
    }

    public function create()
    {
        $title = trans('titles.invoices_create');
        $users = User::all();
        $customers = Customer::all();
        $items = Item::all();

        return view('admin.invoices.create', compact(
            'title', 'users', 'customers', 'items'

        ));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'customer_id' => 'required',
//            'invoice_date' => 'required|date',
            'invoice_number_formal' => 'nullable|unique:invoices',
            'invoice_number_informal' => 'nullable|unique:invoices',
            'item_id' => 'required',
            'discount' => '',
            'description' => 'required',
        ]);
        $data['invoice_number'] = \App\Invoice::invoiceNumber();
        $data['user_id'] = auth()->user()->id;
        $item = Item::find($data['item_id']);
        $data['capital'] = $item->capital;
        $data['sale_price'] = $item->sale_price;

        if($data['discount'] == null)
            $data['discount'] = 0;

        $data['sale_price_with_dis'] = $data['sale_price'] - $data['discount'];
        $data['profit'] = $data['sale_price_with_dis'] - $data['capital'];
        $data['paid'] = 0;
        $data['rest'] = $data['sale_price_with_dis'];
        $data['status'] = Invoice::INVOICE_STATUS_DRAFT;

        Invoice::create($data);

//      HISTORIES DATABASE TABLE
        $invoice_id = DB::getPdo()->lastInsertId();
        $history = [];

        $history['invoice_id'] = $invoice_id;
        $history['date'] = Carbon::now()->format('Y-m-d H:i:s');
        $history['amount'] = 0;
        $history['status'] = Invoice::INVOICE_STATUS_DRAFT;
        $history['description'] = trans('invoices_histories.invoice_added');
        History::create($history);


        session()->flash('success', trans('session.invoice_record_stored'));

        return redirect(adminUrl('invoices'));
    }

    public function show(Invoice $invoice)
    {
        $title = trans('titles.invoices_show');
        return view('admin.invoices.show', compact(
            'title', 'invoice'
        ));
    }

    public function edit(Invoice $invoice)
    {
        $title = trans('titles.invoices_edit');
        $users = User::all();
        $customers = Customer::all();

        return view('admin.invoices.edit', compact(
            'title', 'invoice', 'users', 'customers'
        ));
    }

    public function update(Request $request, Invoice $invoice)
    {
        $data = $this->validate($request, [
            'user_id' => 'required',
            'customer_id' => 'required',
            'invoice_date' => 'required|date',
            'invoice_number_formal' => 'unique:invoices,invoice_number_formal,' . $invoice->id,
            'invoice_number_informal' => 'unique:invoices,invoice_number_informal,' . $invoice->id,
            'item_id' => 'required',
            'capital' => '',
            'sale_price' => '',
            'discount' => '',
            'sale_price_with_discount' => '',
            'description' => 'required',
        ]);

        $data['invoice_number'] = $invoice->invoice_number;
        $data['paid'] = $invoice->paid;
        $data['rest'] = $invoice->rest;
        $data['status'] = $invoice->status;

        Invoice::where('id', $invoice->id)->update($data);
        session()->flash('success', trans('session.invoice_record_updated'));

        return redirect(adminUrl('invoices'));
    }

    public function destroy(Invoice $invoice)
    {
        Invoice::find($invoice->id)->delete();
        $invoice->payments()->delete();
        $invoice->histories()->delete();
        session()->flash('success', trans('session.invoice_record_deleted'));
        return redirect(adminUrl('invoices'));
    }

    public function invoicePDF($id)
    {
        $invoice = Invoice::find($id);
        $pdf = PDF::loadView('admin.invoices.invoicePDF')->setPaper('a4', 'portrait');
        $fileName = $invoice->id;
        return $pdf->stream($fileName . '.pdf');

//        return view('admin.invoices.invoicePDF', compact($invoice));
    }

}

