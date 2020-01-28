<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'histories';
    protected $fillable = [
        'invoice_id',
        'amount',
        'status',
        'description',
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
