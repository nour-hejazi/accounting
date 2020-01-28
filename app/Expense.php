<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Expense extends Model
{
    protected $table = 'expenses';
    protected $fillable = [
        'type',
    ];

    public static function numberOfExpense()
    {
        $number = DB::table('expenses')->get()->count();
        return $number;
    }


    public static function expenseAllPaid($expense_id)
    {
        $all_paid = DB::table('bills')
                      ->where('expense_id', $expense_id)->sum('cost');
        return $all_paid;
    }



    public function bills()
    {
        return $this->hasMany(Bill::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
