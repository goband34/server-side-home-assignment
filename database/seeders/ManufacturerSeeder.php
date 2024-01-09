<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('manufacturers')->insert([[
            'name' => 'Toyota Motor Corp',
            'address' => 'HQ, Kyoto District, Tokyo, Japan',
            'phone' => '+1 800 233 8232'
        ], [
            'name' => 'BMW Group',
            'address' => 'HQ, Bavaria State, Berlin, Germany',
            'phone' => '+12 234 8552 923'
        ], [
            'name' => 'Audi AG',
            'address' => 'HQ, Ingolstadt, Bavaria, Germany',
            'phone' => '+49 (0)841 89-0'
        ], [
            'name' => 'Honda Motor Corp',
            'address' => 'HQ, Minato District, Tokyo, Japan',
            'phone' => '+03 3423 1111'
        ]]);
    }
}
