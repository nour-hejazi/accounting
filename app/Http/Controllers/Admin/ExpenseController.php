<?php

namespace App\Http\Controllers\Admin;

use App\Expense;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $title = trans('titles.expenses_index');
        $expenses = Expense::all();

        return view('admin.expenses.index', compact('title', 'expenses'));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'type' => 'required|unique:expenses'
        ]);

        Expense::create($data);
        session()->flash('success', trans('session.expense_record_stored'));

        return redirect(adminUrl('expenses'));
    }

    public function show(Expense $expense)
    {
        $title = trans('titles.expenses_show');

        return view('admin.expenses.show', compact('expense', 'title'));
    }

    public function update(Request $request, Expense $expense)
    {
        $data = $this->validate($request, [
            'type' => 'required|unique:expenses,type,' . $expense->id,
        ]);

        Expense::where('id', $expense->id)->update($data);
        session()->flash('success', trans('session.expense_record_updated'));

        return redirect(adminUrl('expenses'));

    }

    public function destroy(Expense $expense)
    {
        Expense::find($expense->id)->delete();
        $expense->bills()->delete();
        session()->flash('success', trans('session.expenses_record_deleted'));
        return redirect(adminUrl('expenses'));
    }

    public function paid($id)
    {
        $expense = Expense::find($id);
        $user = User::find($expense->user_id);
        $title = trans('expenses.paid');
        return view('admin.expenses.paid', compact('expense', 'title', 'user'));
    }
}
