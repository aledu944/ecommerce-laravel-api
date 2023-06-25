<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'id' => Uuid::uuid4(),
            'name'          => "Audio y Sonido",
            'slug'          => "audio-y-sonido",
            'image'         => "/storage/products/headphones-c-1.webp",
            'description'   => "Explora una amplia gama de productos de audio y sonido, como auriculares, altavoces, sistemas de sonido para el hogar y más, para disfrutar de una experiencia de audio inigualable.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('categories')->insert([
            'id' => Uuid::uuid4(),
            'name'          => "Computadoras y Accesorios",
            'slug'          => "computadoras-y-accesorios",
            'image'         => "/storage/products/mac_mini_m2-1.webp",
            'description'   => "Encuentra computadoras de escritorio, laptops, tablets y accesorios, como teclados, ratones y monitores, para satisfacer tus necesidades informáticas.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('categories')->insert([
            'id' => Uuid::uuid4(),
            'name'          => "Teléfonos Inteligentes",
            'slug'          => "telefonos-inteligentes",
            'image'         => "/storage/products/iphone_14_pro-1.webp",
            'description'   => "Descubre una variedad de teléfonos inteligentes de última generación, así como accesorios como fundas, protectores de pantalla y cargadores, para mantenerte conectado en todo momento.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('categories')->insert([
            'id' => Uuid::uuid4(),
            'name'          => "Videojuegos y Consolas",
            'slug'          => "videojuegos-y-consolas",
            'image'         => "/storage/products/ps5-1.webp",
            'description'   => "Sumérgete en el mundo de los videojuegos con las consolas más populares, juegos emocionantes y accesorios adicionales para disfrutar de la experiencia de juego definitiva.",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
