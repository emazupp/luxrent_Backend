<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = [
            [
                'brand_id' => 1, // Ferrari
                'category_id' => 1, // Supercar
                'model' => '488 Pista',
                'year' => 2019,
                'description' => 'Ferrari 488 Pista, una delle auto più potenti mai prodotte dalla casa di Maranello.',
                'transmission' => 'automatica',
                'fuel_type' => 'benzina',
                'seats' => 2,
                'doors' => 2,
                'color' => 'Rosso Corsa',
                'horsepower' => 720,
                'engine_size' => 3902,
                'price_per_day' => 1200.00,
                'is_available' => true,
                "homepage" => true,
            ],
            [
                'brand_id' => 2, // Lamborghini
                'category_id' => 1, // Supercar
                'model' => 'Aventador SVJ',
                'year' => 2020,
                'description' => 'Lamborghini Aventador SVJ è una supercar che combina prestazioni senza compromessi con design aggressivo.',
                'transmission' => 'automatica',
                'fuel_type' => 'benzina',
                'seats' => 2,
                'doors' => 2,
                'color' => 'Grigio Telesto',
                'horsepower' => 770,
                'engine_size' => 6498,
                'price_per_day' => 1500.00,
                'is_available' => true,
                "homepage" => true,

            ],
            [
                'brand_id' => 3, // Porsche
                'category_id' => 6, // Sportiva
                'model' => '911 Turbo S',
                'year' => 2022,
                'description' => 'La Porsche 911 Turbo S è la quintessenza delle auto sportive, famosa per la sua agilità e potenza.',
                'transmission' => 'automatica',
                'fuel_type' => 'benzina',
                'seats' => 4,
                'doors' => 2,
                'color' => 'Bianco Carrara',
                'horsepower' => 650,
                'engine_size' => 3745,
                'price_per_day' => 1000.00,
                'is_available' => true,
            ],
            [
                'brand_id' => 4, // Rolls Royce
                'category_id' => 2, // Lusso
                'model' => 'Phantom',
                'year' => 2021,
                'description' => 'Rolls-Royce Phantom, simbolo di lusso e raffinatezza, con interni personalizzabili su misura.',
                'transmission' => 'automatica',
                'fuel_type' => 'benzina',
                'seats' => 5,
                'doors' => 4,
                'color' => 'Verde Highlands',
                'horsepower' => 571,
                'engine_size' => 6749,
                'price_per_day' => 2000.00,
                'is_available' => true,
                "homepage" => true,
            ],
            [
                'brand_id' => 5, // Bentley
                'category_id' => 2, // Lusso
                'model' => 'Continental GT',
                'year' => 2022,
                'description' => 'Bentley Continental GT, una coupé di lusso che unisce eleganza britannica e prestazioni mozzafiato.',
                'transmission' => 'automatica',
                'fuel_type' => 'benzina',
                'seats' => 4,
                'doors' => 2,
                'color' => 'Nero Onyx',
                'horsepower' => 650,
                'engine_size' => 5998,
                'price_per_day' => 1300.00,
                'is_available' => true,
                "homepage" => true,

            ],
            [
                'brand_id' => 6, // Aston Martin
                'category_id' => 6, // Sportiva
                'model' => 'DB11',
                'year' => 2021,
                'description' => 'Aston Martin DB11, una perfetta combinazione di eleganza e potenza.',
                'transmission' => 'automatica',
                'fuel_type' => 'benzina',
                'seats' => 2,
                'doors' => 2,
                'color' => 'Grigio China Grey',
                'horsepower' => 528,
                'engine_size' => 5204,
                'price_per_day' => 1100.00,
                'is_available' => true,
            ],
            [
                'brand_id' => 1, // Ferrari
                'category_id' => 5, // Epoca
                'model' => 'Ferrari 250 GTO',
                'year' => 1962,
                'description' => 'Ferrari 250 GTO è una delle auto più iconiche e rare della storia, nota per le sue prestazioni legendarie.',
                'transmission' => 'manuale',
                'fuel_type' => 'benzina',
                'seats' => 2,
                'doors' => 2,
                'color' => 'Rosso Ferrari',
                'horsepower' => 300,
                'engine_size' => 2963,
                'price_per_day' => 5000.00,
                'is_available' => true,
                "homepage" => true,

            ],
            [
                'brand_id' => 2, // Lamborghini
                'category_id' => 1, // Supercar
                'model' => 'Huracán Performante',
                'year' => 2018,
                'description' => 'Lamborghini Huracán Performante è una supercar con prestazioni straordinarie e un design mozzafiato.',
                'transmission' => 'automatica',
                'fuel_type' => 'benzina',
                'seats' => 2,
                'doors' => 2,
                'color' => 'Verde Mantis',
                'horsepower' => 640,
                'engine_size' => 5204,
                'price_per_day' => 1400.00,
                'is_available' => true,
                "homepage" => true,

            ],
            [
                'brand_id' => 3, // Porsche
                'category_id' => 6, // Sportiva
                'model' => 'Cayman GT4',
                'year' => 2020,
                'description' => 'Porsche Cayman GT4 è una sportiva pura con eccellenti prestazioni e un design raffinato.',
                'transmission' => 'manuale',
                'fuel_type' => 'benzina',
                'seats' => 2,
                'doors' => 2,
                'color' => 'Grigio Dolomite',
                'horsepower' => 420,
                'engine_size' => 4200,
                'price_per_day' => 800.00,
                'is_available' => true,
                "homepage" => true,

            ],
            [
                'brand_id' => 4, // Rolls Royce
                'category_id' => 2, // Lusso
                'model' => 'Ghost',
                'year' => 2020,
                'description' => 'Rolls-Royce Ghost, l\'auto di lusso che offre un comfort senza pari ed una potenza immensa.',
                'transmission' => 'automatica',
                'fuel_type' => 'benzina',
                'seats' => 5,
                'doors' => 4,
                'color' => 'Arctic White',
                'horsepower' => 563,
                'engine_size' => 6749,
                'price_per_day' => 2200.00,
                'is_available' => true,
            ],
        ];
        


        foreach ($cars as $car) {
            $newCar = new Car();

            $newCar->brand_id = $car["brand_id"];
            $newCar->category_id = $car["category_id"];
            $newCar->model = $car["model"];
            $newCar->year = $car["year"];
            $newCar->description = $car["description"];
            $newCar->transmission = $car["transmission"];
            $newCar->fuel_type = $car["fuel_type"];
            $newCar->seats = $car["seats"];
            $newCar->doors = $car["doors"];
            $newCar->color = $car["color"];
            $newCar->horsepower = $car["horsepower"];
            $newCar->engine_size = $car["engine_size"];
            $newCar->price_per_day = $car["price_per_day"];
            $newCar->is_available = $car["is_available"];
            if(isset($car["homepage"])) {
                $newCar->homepage = $car["homepage"];
            }

            $newCar->save();
        }
    }
}
