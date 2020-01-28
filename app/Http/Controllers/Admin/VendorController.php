<?php

namespace App\Http\Controllers\Admin;

use App\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VendorController extends Controller
{

    public function index()
    {
        $title = trans('titles.vendors_index');
        $vendors = Vendor::orderBy('created_at', 'desc')->get();

        return view('admin.vendors.index', compact('title', 'vendors'));
    }

    public function create()
    {
        $title = trans('titles.vendors_create');

        return view('admin.vendors.create', compact('title'));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'company' => 'required|unique:vendors',
            'name' => 'required',
            'surname' => 'required',
            'email' => '',
            'phone' => 'required',
            'website' => '',
            'address' => '',
            'notes' => '',
        ]);

        Vendor::create($data);
        session()->flash('success', trans('session.vendor_record_added'));

        return redirect(adminUrl('vendors'));
    }

    public function show(Vendor $vendor)
    {
        $title = trans('titles.vendors_show');

        return view('admin.vendors.show', compact('title', 'vendor'));
    }

    public function edit(Vendor $vendor)
    {
        $title = trans('titles.vendors_edit');

        return view('admin.vendors.edit', compact('title', 'vendor'));
    }

    public function update(Request $request, Vendor $vendor)
    {
        $data = $this->validate($request, [
            'company' => 'required|unique:vendors,company,' . $vendor->id,
            'name' => 'required',
            'surname' => 'required',
            'email' => '',
            'phone' => 'required',
            'website' => '',
            'address' => '',
            'notes' => '',
        ]);

        Vendor::where('id', $vendor->id)->update($data);
        session()->flash('success', trans('session.vendors_record_edited'));

        return redirect(adminUrl('vendors/' . $vendor->id));
    }

    public function destroy(Vendor $vendor)
    {
        Vendor::find($vendor->id)->delete();
        session()->flash('success', trans('admin.vendors_deleted_record'));

        return redirect(adminUrl('vendors'));
    }
}
