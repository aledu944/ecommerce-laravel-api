<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_images')->insert([
            'product_id' => "6f8d88b5-d8c2-4d83-88df-bfa95d2c61b4",
            'url'      => "/storage/products/ps5-2.webp",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('product_images')->insert([
            'product_id' => "6f8d88b5-d8c2-4d83-88df-bfa95d2c61b4",
            'url'      => "/storage/products/ps5-1.webp",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('product_images')->insert([
            'product_id' => "77cbe620-45e0-40e6-a601-06666ddbc9a8",
            'url'      => "/storage/products/headphones-c-1.webp",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('product_images')->insert([
            'product_id' => "77cbe620-45e0-40e6-a601-06666ddbc9a8",
            'url'      => "/storage/products/headphones-c-2.webp",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('product_images')->insert([
            'product_id' => "b2a284d7-94f6-456c-acac-2556c6669aec",
            'url'      => "/storage/products/ps4_slim-1.webp",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('product_images')->insert([
            'product_id' => "b2a284d7-94f6-456c-acac-2556c6669aec",
            'url'      => "/storage/products/ps4_slim-2.webp",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('product_images')->insert([
            'product_id' => "d9de791c-e50d-4a22-a8a3-963e04fdc074",
            'url'      => "/storage/products/earphones_b_1.webp",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('product_images')->insert([
            'product_id' => "d9de791c-e50d-4a22-a8a3-963e04fdc074",
            'url'      => "/storage/products/earphones_b_2.webp",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
