<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::create([
            'prd_business'=> 1,
            'prd_picture' => '001001.png',
            'prd_title'   => 'Paste de jamon',
            'prd_desc'    => 'Paste traducional hecho con jamon y queso',
            'prd_details' => '125 gr',
            'prd_price'   => '30.00',
            'prd_status'  => '01',
            'prd_type'    => '1',
        ]);

        \App\Models\Product::create([
            'prd_business'=> 1,
            'prd_picture' => '001002.png',
            'prd_title'   => 'Paste de chorizo',
            'prd_desc'    => 'Paste traducional hecho con jamon y chorizo',
            'prd_details' => '125 gr',
            'prd_price'   => '30.00',
            'prd_status'  => '01',
            'prd_type'    => '1',
        ]);

        \App\Models\Product::create([
            'prd_business'=> 2,
            'prd_picture' => '002003.png',
            'prd_title'   => 'Pay de piña',
            'prd_desc'    => 'Pay traducional hecho piña y queso',
            'prd_details' => '100 gr',
            'prd_price'   => '45.00',
            'prd_status'  => '01',
            'prd_type'    => '1',
        ]);

        \App\Models\Product::create([
            'prd_business'=> 2,
            'prd_picture' => '002004.png',
            'prd_title'   => 'Pay de oreo',
            'prd_desc'    => 'Pay traducional hecho con galleta oreo y queso crema',
            'prd_details' => '100 gr',
            'prd_price'   => '45.00',
            'prd_status'  => '01',
            'prd_type'    => '1',
        ]);
    }
}
