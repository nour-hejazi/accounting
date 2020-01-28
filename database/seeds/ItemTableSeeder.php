<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ItemTableSeeder extends Seeder
{

    public function run()
    {


        DB::table('items')->insert([
            'name' => 'card',
            'type' => 'type',
            'code' => '#rrw46523WEw43',
            'description' =>  '121321',
            'capital' => 50,
            'sale_price' => 100,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
