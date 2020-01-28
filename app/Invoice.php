<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Invoice extends Model
{
    const INVOICE_STATUS_DRAFT = 0;
    const INVOICE_STATUS_PARTIAL= 1;
    const INVOICE_STATUS_PAID = 2;

    const INVOICE_STATUS_PAID_ZERO = 0;

    protected $table = 'invoices';
    protected $fillable = [
        'user_id',
        'customer_id',
//        'invoice_date',
        'invoice_number',
        'invoice_number_formal',
        'invoice_number_informal',
        'item_id',
        'capital',
        'sale_price',
        'discount',
        'sale_price_with_dis',
        'profit',
        'paid',
        'rest',
        'description',
        'status',
    ];

    public static $dates_ = [
      1,2,3,4,5,6,7,8,9,10,11,12
    ];

    public static function numberOfInvoice()
    {
        $number = DB::table('invoices')->get()->count();
        return $number;
    }

    public static function invoiceNumber()
    {
        $invoice = DB::table('invoices')->latest('created_at')->first();
        if(empty($invoice)){
            $invoice_number = 1;
        }else{
            $invoice_number = $invoice->invoice_number + 1;

        }
        return $invoice_number;
    }


    public static function TotalPaid()
    {
        $total_paid = DB::table('invoices')->sum('paid');
        return $total_paid;
    }

    public static function IWantFromCustomer()
    {
        $total_sale_price_with_dis = DB::table('invoices')->sum('sale_price_with_dis');
        $total_paid = DB::table('invoices')->sum('paid');
        $IWant = $total_sale_price_with_dis - $total_paid;
        return $IWant;
    }
    public static function TotalProfit()
    {
        $total_profit = DB::table('invoices')->sum('profit');
        return $total_profit;
    }

    public static function InvoiceDebtors()
    {
        $invoices = Invoice::where('rest', '>', 0)->get()->count();
        return $invoices;
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function histories()
    {
        return $this->hasMany(History::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
