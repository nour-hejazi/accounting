<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillPayment extends Model
{
    protected $table = 'bill_payments';
    protected $fillable = [
        'user_id',
        'bill_id',
        'amount',
    ];

    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }
}
