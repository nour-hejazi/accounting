<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillHistory extends Model
{
    protected $table = 'bill_histories';
    protected $fillable = [
        'bill_id',
        'amount',
        'status',
        'description',
    ];

    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }
}
