<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'sku' => '000001',
            'name' => 'Full coverage insurance',
            'category' => 'insurance',
            'price' => 89000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'sku' => '000002',
            'name' => 'Compact Car X3',
            'category' => 'vehicle',
            'price' => 99000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'sku' => '000003',
            'name' => 'SUV Vehicle, high end',
            'category' => 'vehicle',
            'price' => 150000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'sku' => '000004',
            'name' => 'Basic coverage',
            'category' => 'insurance',
            'price' => 20000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('products')->insert([
            'sku' => '000005',
            'name' => 'Convertible X2, Electric',
            'category' => 'vehicle',
            'price' => 250000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
