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
        // DB::table('product_images')->insert([
        //     'product_id' => "07d03660-a54c-4fd5-8ab8-d34ce637c867",
        //     'url'      => "/storage/products/play-station-5-1.webp",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);
        // DB::table('product_images')->insert([
        //     'product_id' => "07d03660-a54c-4fd5-8ab8-d34ce637c867",
        //     'url'      => "/storage/products/play-station-5-2.webp",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        // DB::table('product_images')->insert([
        //     'product_id' => "7eb79d7e-3bba-4a3f-9974-e50d1a661c68",
        //     'url'      => "/storage/products/macbook-pro-m2-1.webp",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        // DB::table('product_images')->insert([
        //     'product_id' => "7eb79d7e-3bba-4a3f-9974-e50d1a661c68",
        //     'url'      => "/storage/products/macbook-pro-m2-2.webp",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        // DB::table('product_images')->insert([
        //     'product_id' => "7eb79d7e-3bba-4a3f-9974-e50d1a661c68",
        //     'url'      => "/storage/products/macbook-pro-m2-3.webp",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        // DB::table('product_images')->insert([
        //     'product_id' => "872b0f16-32b9-426d-9bce-1073a73ca969",
        //     'url'      => "/storage/products/iphone-14-1.webp",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        // DB::table('product_images')->insert([
        //     'product_id' => "872b0f16-32b9-426d-9bce-1073a73ca969",
        //     'url'      => "/storage/products/iphone-14-2.webp",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        // DB::table('product_images')->insert([
        //     'product_id' => "9160d376-f4af-4b51-b484-c98b9a3343b9",
        //     'url'      => "/storage/products/iphone-14-pro-max-1.webp",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        // DB::table('product_images')->insert([
        //     'product_id' => "9160d376-f4af-4b51-b484-c98b9a3343b9",
        //     'url'      => "/storage/products/iphone-14-pro-max-2.webp",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        // DB::table('product_images')->insert([
        //     'product_id' => "d7a940a1-1db2-4835-ad1e-ab296e6d6a8e",
        //     'url'      => "/storage/products/airpods-1.webp",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        // DB::table('product_images')->insert([
        //     'product_id' => "d7a940a1-1db2-4835-ad1e-ab296e6d6a8e",
        //     'url'      => "/storage/products/airpods-2.webp",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        // DB::table('product_images')->insert([
        //     'product_id' => "d7a940a1-1db2-4835-ad1e-ab296e6d6a8e",
        //     'url'      => "/storage/products/airpods-3.webp",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        // DB::table('product_images')->insert([
        //     'product_id' => "fae7143c-ddf8-4396-9f0f-f3f7c2fb5c66",
        //     'url'      => "/storage/products/samsung-s23-plus-1.webp",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        // DB::table('product_images')->insert([
        //     'product_id' => "fae7143c-ddf8-4396-9f0f-f3f7c2fb5c66",
        //     'url'      => "/storage/products/samsung-s23-plus-2.webp",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        // DB::table('product_images')->insert([
        //     'product_id' => "fae7143c-ddf8-4396-9f0f-f3f7c2fb5c66",
        //     'url'      => "/storage/products/samsung-s23-plus-3.webp",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        DB::table('product_images')->insert([
            'product_id' => "e0443054-1082-4a87-990c-b54f501e073d",
            'url'      => "/storage/products/xbox-series-x-1.webp",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('product_images')->insert([
            'product_id' => "e0443054-1082-4a87-990c-b54f501e073d",
            'url'      => "/storage/products/xbox-series-x-2.webp",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
    }
}
