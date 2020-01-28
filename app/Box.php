<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Box extends Model
{
    protected $table = 'boxes';
    protected $fillable = [

    ];

    public static function numberOfBox()
    {
        $number = DB::table('boxes')->get()->count();
        return $number;
    }
}
