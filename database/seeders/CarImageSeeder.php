<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;
use App\Models\Image;

class CarImageSeeder extends Seeder
{
    public function run()
    {
        $carMainImageData = [
            ['car_id' => 1, 'image_id' => 1],
            ['car_id' => 2, 'image_id' => 2],
            ['car_id' => 3, 'image_id' => 3],
            ['car_id' => 4, 'image_id' => 4],
            ['car_id' => 5, 'image_id' => 5],
            ['car_id' => 6, 'image_id' => 6],
            ['car_id' => 7, 'image_id' => 7],
            ['car_id' => 8, 'image_id' => 8],
            ['car_id' => 9, 'image_id' => 9],
            ['car_id' => 10, 'image_id' => 10],
        ];

        $carTopImageData = [
            ['car_id' => 1, 'image_id' => 11],
            ['car_id' => 2, 'image_id' => 12],
            ['car_id' => 3, 'image_id' => 13],
            ['car_id' => 4, 'image_id' => 14],
            ['car_id' => 5, 'image_id' => 15],
            ['car_id' => 6, 'image_id' => 16],
            ['car_id' => 7, 'image_id' => 17],
            ['car_id' => 8, 'image_id' => 18],
            ['car_id' => 9, 'image_id' => 19],
            ['car_id' => 10, 'image_id' => 20],
        ];

        foreach ($carMainImageData as $data) {
            $car = Car::find($data['car_id']);
            $image = Image::find($data['image_id']);
            if ($car && $image) {
                $car->images()->attach($image->id);
            }
        }
        foreach ($carTopImageData as $data) {
            $car = Car::find($data['car_id']);
            $image = Image::find($data['image_id']);
            if ($car && $image) {
                $car->images()->attach($image->id);
            }
        }
    }
}
