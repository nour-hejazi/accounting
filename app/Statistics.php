<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Statistics extends Model
{
    public static function statisticsUsersNumber()
    {
        $count = DB::table('users')
                   ->get()
                   ->count();
        return $count;
    }



}
