<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    protected $table = 'items';
    protected $fillable = [
        'name',
        'type',
        'code',
        'description',
        'capital',
        'sale_price',
    ];

    public static function numberOfItems()
    {
        $number = DB::table('items')->get()->count();
        return $number;
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}

