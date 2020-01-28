<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{

    protected $table = 'customers';
    protected $fillable = [
        'company',
        'company_real',
        'tax_office',
        'tax_no',
        'name',
        'surname',
        'email',
        'phone',
        'website',
        'address',
        'notes',
    ];

    public static function numberOfInvoiceBelongsToCustomer($id)
    {
        $number = Invoice::where('customer_id', $id)->get()->count();

        return $number;
    }

    public static function debtsForCustomer($id)
    {
        $debts = Invoice::where('customer_id', $id)->get()->sum('rest');

        return $debts;
    }

    public static function numberOfInvoiceThatDebt($id)
    {
        $debts = Invoice::where('customer_id', $id)->where('rest', '>', 0)->get()->count();

        return $debts;
    }

    public static function allPaidFromCustomer($id)
    {
        $paid = Invoice::where('customer_id', $id)->get()->sum('paid');
        return $paid;

    }

    public static function numberOfCustomer()
    {
        $number = DB::table('customers')->get()->count();

        return $number;
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
