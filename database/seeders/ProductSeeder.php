<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'id'        => Uuid::uuid4(),
            'name'      => "Play Station 5",
            'slug'      => "play-station-5",
            'stock'     => 20,
            'price'     => 499.90,
            'description' => "La nueva consola de Sony se encuentra disponible en dos versiones: la PS5 (con lectora de discos) y la PS5 Digital Edition. Además, de una serie de accesorios que harán tu experiencia de juego fantástica. Definitivamente, estamos hablando de una máquina fuera de serie",
            'category_id' => "006fe0af-379f-47cd-bb0f-769fadd2ac36",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('products')->insert([
            'id'        => Uuid::uuid4(),
            'name'      => "Play Station 4 Slim",
            'slug'      => "play-station-4-slim",
            'stock'     => 12,
            'price'     => 350.0,
            'description' => "Diseñado para acercar los juegos a los jugadores, mientras se energiza la próxima generación de videojuegos, Playstation 4 Slim te ayuda a descubrir un mundo de experiencias de juego extraordinarias. Está vinculado a todo su universo multimedia.",
            'category_id' => "006fe0af-379f-47cd-bb0f-769fadd2ac36",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('products')->insert([
            'id'        => Uuid::uuid4(),
            'name'      => "Auriculares inalambricos Extra Bass",
            'slug'      => "auriculares-inalambricos-extra-bass",
            'stock'     => 50,
            'price'     => 75.5,
            'description' => "Siente la emoción de la discoteca con los auriculares Extra Bass. El potente control de respuesta de ritmo mejora los sonidos de baja frecuencia y las almohadillas acolchadas te permiten escuchar con comodidad durante más tiempo. Realiza llamadas manos libres con el mando a distancia para teléfonos Android y presume de estilo con los detalles en aluminio",
            'category_id' => "5c85d335-b504-4825-b570-60b59e26d070",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('products')->insert([
            'id'        => Uuid::uuid4(),
            'name'      => "Auriculares inalambricos Deportivas",
            'slug'      => "auriculares-inalambricos-deportivas",
            'stock'     => 15,
            'price'     => 55.90,
            'description' => "Calidad de sonido estéreo: los auriculares Bluetooth vienen con diafragma vibratorio de 0.51 pulgadas y tecnología de reproducción HD que produce una increíble calidad de sonido con agudos nítidos y cristalinos. Reproduce tu música vívidamente.",
            'category_id' => "5c85d335-b504-4825-b570-60b59e26d070",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
