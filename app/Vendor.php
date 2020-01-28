<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vendor extends Model
{
    protected $table = 'vendors';
    protected $fillable = [
        'company',
        'name',
        'surname',
        'email',
        'phone',
        'website',
        'address',
        'notes',
    ];

    public static function numberOfVendors()
    {
        $number = DB::table('vendors')->get()->count();
        return $number;
    }
}
