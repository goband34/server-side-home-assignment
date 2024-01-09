<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('cars')->insert([[
            'model' => 'Camry',
            'year' => '2010',
            'salesperson_email' => 'joe@carozza.com',
            'manufacturer_id' => '1'
        ], [
            'model' => '330i',
            'year' => '2021',
            'salesperson_email' => 'mary@carozza.com',
            'manufacturer_id' => '2'
        ]]);
    }
}
