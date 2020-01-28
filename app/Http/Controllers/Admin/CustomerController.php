<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{

    public function index()
    {
        $title = trans('titles.customers_index');
        $customers = Customer::orderBy('created_at', 'desc')->get();

        return view('admin.customers.index', compact('title', 'customers'));
    }

    public function create()
    {
        $title = trans('titles.customers_create');

        return view('admin.customers.create', compact('title'));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'company' => 'required|unique:customers',
            'name' => 'required',
            'surname' => 'required',
            'company_real' => '',
            'tax_no' => '',
            'tax_office' => '',
            'email' => '',
            'phone' => 'required',
            'website' => '',
            'address' => '',
            'notes' => '',
        ]);

        Customer::create($data);
        session()->flash('success', trans('session.customer_record_stored'));

        return redirect(adminUrl('customers'));
    }

    public function show(Customer $customer)
    {
        $title = trans('titles.customers_show');

        return view('admin.customers.show', compact('title', 'customer'));
    }

    public function edit(Customer $customer)
    {
        $title = trans('titles.customers_edit');

        return view('admin.customers.edit', compact('title', 'customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $data = $this->validate($request, [
            'company' => 'required|unique:customers,company,' . $customer->id,
            'name' => 'required',
            'company_real' => '',
            'tax_no' => '',
            'tax_office' => '',
            'surname' => 'required',
            'email' => '',
            'phone' => 'required',
            'website' => '',
            'address' => '',
            'notes' => '',
        ]);

        Customer::where('id', $customer->id)->update($data);
        session()->flash('success', trans('session.customer_record_updated'));

        return redirect(adminUrl('customers/' . $customer->id));
    }

    public function destroy(Customer $customer)
    {
        Customer::find($customer->id)->delete();
        session()->flash('success', trans('session.customers_record_deleted'));

        return redirect(adminUrl('customers'));
    }

    public function services($id)
    {
        $customer = Customer::find($id);
        $invoices = Invoice::where('customer_id', $id)->get();
        $title = trans('titles.customers_services');

        return view('admin.customers.services', compact('customer', 'title', 'invoices'));
    }

    public function debts($id)
    {
        $customer = Customer::find($id);
        $debts = Invoice::where('customer_id', $id)->get()->sum('rest');
        $invoices_debts = Invoice::where('customer_id', $id)->where('rest', '>', 0)->get();
        $title = trans('titles.customers_debts');

        return view('admin.customers.debts', compact('customer', 'title', 'debts', 'invoices_debts'));
    }

    public function records($id)
    {
        $customer = Customer::find($id);
        $title = trans('titles.customers_records');

        return view('admin.customers.records', compact('customer', 'title'));
    }

}
