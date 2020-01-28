<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CustomersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('customers')->insert([
            'company' => 'كولدن سيتي',
            'name' => 'nour',
            'company_real' => 'Golden City',
            'tax_no' => '14512313246542310',
            'tax_office' => 'Fatih',
            'surname' => 'hijazi',
            'email' => '',
            'phone' => '0505050',
            'website' => '',
            'address' => '',
            'notes' => '',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
