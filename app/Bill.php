<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bill extends Model
{

    const BILL_STATUS_DRAFT = 0;
    const BILL_STATUS_PARTIAL= 1;
    const BILL_STATUS_PAID = 2;

    protected $table = 'bills';
    protected $fillable = [
        'user_id',
        'expense_id',
        'description',
        'cost',
        'paid',
        'rest',
        'status',
    ];



    public static function numberOfBills()
    {
        $number = DB::table('bills')->get()->count();
        return $number;
    }

    public static function numberOfPaidByExpense($expense_id)
    {
        $number = DB::table('bills')->where('expense_id', $expense_id)->get()->count();
        return $number;
    }


    public static function TotalPaid()
    {
        $total_paid = DB::table('bills')->sum('paid');
        return $total_paid;
    }

    public static function IShouldPay()
    {
        $total_cost = DB::table('bills')->sum('cost');
        $total_paid = DB::table('bills')->sum('paid');
        $IShouldPay = $total_cost - $total_paid;
        return $IShouldPay;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function expense()
    {
        return $this->belongsTo(Expense::class);
    }

    public function bill_payments()
    {
        return $this->hasMany(BillPayment::class);
    }

    public function bill_histories()
    {
        return $this->hasMany(BillHistory::class);
    }
}
