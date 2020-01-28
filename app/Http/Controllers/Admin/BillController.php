<?php

namespace App\Http\Controllers\Admin;

use App\Bill;
use App\BillHistory;
use App\BillPayment;
use App\Expense;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{

    public function index()
    {
        $title = trans('titles.bills_index');
        $bills = Bill::orderBy('created_at', 'desc')->get();
        return view('admin.bills.index', compact(
            'title', 'bills'
        ));
    }

    public function create()
    {
        $users = User::all();
        $expenses = Expense::all();
        $title = trans('titles.bills_create');
        return view('admin.bills.create', compact(
            'title', 'users', 'expenses'
        ));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'expense_id' => 'required',
            'description' => 'required',
            'cost' => 'required',
        ]);
        $data['user_id'] = auth()->user()->id;
        $data['paid'] = 0;
        $data['rest'] = $data['cost'];
        $data['status'] = Bill::BILL_STATUS_DRAFT;

        Bill::create($data);


//        HISTORIES DATABASE TABLE
        $bill_id = DB::getPdo()->lastInsertId();
        $history = [];

        $history['bill_id'] = $bill_id;
        $history['date'] = Carbon::now()->format('Y-m-d H:i:s');
        $history['amount'] = 0;
        $history['status'] = Bill::BILL_STATUS_DRAFT;
        $history['description'] = trans('bills_histories.bill_added');
        BillHistory::create($history);

        session()->flash('success', trans('session.bill_record_stored'));

        return redirect(adminUrl('bills'));
    }

    public function show(Bill $bill)
    {
        $title = trans('titles.bills_show');
        return view('admin.bills.show', compact('title', 'bill'));
    }

    public function edit(Bill $bill)
    {
        $users = User::all();
        $expenses = Expense::all();
        $title = trans('titles.bills_edit');
        return view('admin.bills.edit', compact(
            'title', 'bill', 'users', 'expenses'
        ));
    }

    public function update(Request $request, Bill $bill)
    {
        $data = $this->validate($request, [
            'user_id' => 'required',
            'expense_id' => 'required',
            'description' => 'required',
            'cost' => 'required',
        ]);
        $data['paid'] = $bill->paid;
        $data['rest'] = $bill->rest;
        $data['status'] = $bill->status;

        Bill::where('id', $bill->id)->update($data);
        session()->flash('success', trans('session.bill_record_updated'));

        return redirect(adminUrl('bills/' . $bill->id));
    }

    public function destroy(Bill $bill)
    {
        Bill::find($bill->id)->delete();
        session()->flash('success', trans('session.bill_record_deleted'));
        return redirect(adminUrl('bills'));
    }


}
