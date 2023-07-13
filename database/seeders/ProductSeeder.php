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
        // DB::table('products')->insert([
        //     'id'        => Uuid::uuid4(),
        //     'name'      => "Play Station 5",
        //     'slug'      => "play-station-5",
        //     'stock'     => 20,
        //     'price'     => 499.90,
        //     'description' => "La nueva consola de Sony se encuentra disponible en dos versiones: la PS5 (con lectora de discos) y la PS5 Digital Edition. Además, de una serie de accesorios que harán tu experiencia de juego fantástica. Definitivamente, estamos hablando de una máquina fuera de serie",
        //     'category_id' => "006fe0af-379f-47cd-bb0f-769fadd2ac36",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);
        // DB::table('products')->insert([
        //     'id'        => Uuid::uuid4(),
        //     'name'      => "Play Station 4 Slim",
        //     'slug'      => "play-station-4-slim",
        //     'stock'     => 12,
        //     'price'     => 350.0,
        //     'description' => "Diseñado para acercar los juegos a los jugadores, mientras se energiza la próxima generación de videojuegos, Playstation 4 Slim te ayuda a descubrir un mundo de experiencias de juego extraordinarias. Está vinculado a todo su universo multimedia.",
        //     'category_id' => "006fe0af-379f-47cd-bb0f-769fadd2ac36",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);
        // DB::table('products')->insert([
        //     'id'        => Uuid::uuid4(),
        //     'name'      => "Auriculares inalambricos Extra Bass",
        //     'slug'      => "auriculares-inalambricos-extra-bass",
        //     'stock'     => 50,
        //     'price'     => 75.5,
        //     'description' => "Siente la emoción de la discoteca con los auriculares Extra Bass. El potente control de respuesta de ritmo mejora los sonidos de baja frecuencia y las almohadillas acolchadas te permiten escuchar con comodidad durante más tiempo. Realiza llamadas manos libres con el mando a distancia para teléfonos Android y presume de estilo con los detalles en aluminio",
        //     'category_id' => "5c85d335-b504-4825-b570-60b59e26d070",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);
        // DB::table('products')->insert([
        //     'id'        => Uuid::uuid4(),
        //     'name'      => "Auriculares inalambricos Deportivas",
        //     'slug'      => "auriculares-inalambricos-deportivas",
        //     'stock'     => 15,
        //     'price'     => 55.90,
        //     'description' => "Calidad de sonido estéreo: los auriculares Bluetooth vienen con diafragma vibratorio de 0.51 pulgadas y tecnología de reproducción HD que produce una increíble calidad de sonido con agudos nítidos y cristalinos. Reproduce tu música vívidamente.",
        //     'category_id' => "5c85d335-b504-4825-b570-60b59e26d070",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);
        DB::table('products')->insert([
            'id'        => Uuid::uuid4(),
            'name'      => "AirPods",
            'slug'      => "airpods",
            'stock'     => 160,
            'price'     => 79.90,
            'description' => "Los AirPods Pro se han convertido en uno de los productos Apple más deseados gracias a las características que contemplan respecto a sus antecesores, los AirPods. Actualmente, estos auriculares inalámbricos se encuentran en el mercado con una versión más actualizada: los AirPods Pro 2ª Generación.",
            'category_id' => "5c85d335-b504-4825-b570-60b59e26d070",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('products')->insert([
            'id'        => Uuid::uuid4(),
            'name'      => "IPhone 14",
            'slug'      => "iphone-14",
            'stock'     => 60,
            'price'     => 499.00,
            'description' => "El Apple iPhone 14 llega este año con el mismo chip A15 Bionic del iPhone 13. Con una pantalla de 6.1 pulgadas, el iPhone 14 cuenta con una cámara dual con dos sensores de 12MP, siendo el principal estabilizado. La cámara selfie es de 12MP y suma PDAF y la batería puede cargarse en forma inalámbrica mediante MagSafe o por cable, logrando una carga de 50% en 30 minutos.",
            'category_id' => "89738397-4674-423f-b607-a0763eee5f61",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('products')->insert([
            'id'        => Uuid::uuid4(),
            'name'      => "IPhone 14 Pro Max",
            'slug'      => "iphone-14-pro-max",
            'stock'     => 20,
            'price'     => 699.00,
            'description' => "El Apple iPhone 14 Pro Max es el iPhone más grande y poderoso de la serie 14. Potenciado por el nuevo procesador Apple A16 Bionic, el iPhone 14 Pro Max cuenta con una pantalla OLED LTPO de 6.7 pulgadas con soporte always-on y un nuevo notch en forma de píldora que se integra a iOS con las notificaciones. La cámara trasera es triple y la cámara principal del conjunto es de 48MP con estabilización por sensor, sumando cámaras ultrawide y telefoto de 12MP",
            'category_id' => "89738397-4674-423f-b607-a0763eee5f61",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('products')->insert([
            'id'        => Uuid::uuid4(),
            'name'      => "MacBookPro M2",
            'slug'      => "macbook-pro-m2",
            'stock'     => 20,
            'price'     => 750.00,
            'description' => "la laptop MacBook Pro de 13 pulgadas es portátil y potente. Es más rápida que una CPU de 8 núcleos de próxima generación, tiene una unidad de procesamiento de gráficos de 10 núcleos y hasta 24 GB de memoria unificada. Batería de hasta 20 horas de duración: puedes usarla todo el día hasta la noche, gracias al rendimiento eficiente del chip M2 de Apple. Rendimiento sostenible gracias a su sistema de refrigeración activa, la MacBook Pro de 13 pulgadas puede mantener niveles profesionales de rendimiento para que puedas ejecutar tareas exigentes de la CPU y la GPU durante horas y horas.",
            'category_id' => "9c3486dc-b1b3-4a10-b5a4-91413cef0fe5",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('products')->insert([
            'id'        => Uuid::uuid4(),
            'name'      => "Play Station 5",
            'slug'      => "play-station-5",
            'stock'     => 65,
            'price'     => 499.90,
            'description' => "La nueva consola de Sony se encuentra disponible en dos versiones: la PS5 (con lectora de discos) y la PS5 Digital Edition. Además, de una serie de accesorios que harán tu experiencia de juego fantástica. Definitivamente, estamos hablando de una máquina fuera de serie",
            'category_id' => "006fe0af-379f-47cd-bb0f-769fadd2ac36",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('products')->insert([
            'id'        => Uuid::uuid4(),
            'name'      => "Samsung S23 Plus",
            'slug'      => "samsung-s23-plus",
            'stock'     => 34,
            'price'     => 300.00,
            'description' => "El Samsung Galaxy S23+ cuenta con una pantalla Dynamic AMOLED 2X de 6.6 pulgadas a resolución FHD+ y tasa de refresco de 120Hz y está potenciado por un procesador Snapdragon 8 Gen 2 optimizado especialmente para la serie, junto con 8GB de RAM y hasta 512GB de almacenamiento. En su posterior encontramos una cámara triple con sensor principal de 50MP con OIS, cámara ultrawide de 12MP y cámara telefoto de 10MP con zoom óptico 3x, mientras que la cámara selfie es de 12MP. Alimentado por una batería de 4700 mAh",
            'category_id' => "89738397-4674-423f-b607-a0763eee5f61",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
