<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    public function run()
    {
        $images = [
            ['path' => 'storage/uploads/cars/488pista_main.png', 'is_main' => 1, 'is_top' => 0],
            ['path' => 'storage/uploads/cars/aventadorSVJ_main.png', 'is_main' => 1, 'is_top' => 0],
            ['path' => 'storage/uploads/cars/911turbo_main.png', 'is_main' => 1, 'is_top' => 0],
            ['path' => 'storage/uploads/cars/phantom_main.png', 'is_main' => 1, 'is_top' => 0],
            ['path' => 'storage/uploads/cars/continentalGT_main.png', 'is_main' => 1, 'is_top' => 0],
            ['path' => 'storage/uploads/cars/DB11_main.png', 'is_main' => 1, 'is_top' => 0],
            ['path' => 'storage/uploads/cars/250GTO_main.png', 'is_main' => 1, 'is_top' => 0],
            ['path' => 'storage/uploads/cars/huracan_main.png', 'is_main' => 1, 'is_top' => 0],
            ['path' => 'storage/uploads/cars/GT4_main.png', 'is_main' => 1, 'is_top' => 0],
            ['path' => 'storage/uploads/cars/ghost_main.png', 'is_main' => 1, 'is_top' => 0],
            ['path' => 'storage/uploads/cars/488pista_top.png', 'is_main' => 0, 'is_top' => 1],
            ['path' => 'storage/uploads/cars/aventadorSVJ_top.png', 'is_main' => 0, 'is_top' => 1],
            ['path' => 'storage/uploads/cars/911turbo_top.png', 'is_main' => 0, 'is_top' => 1],
            ['path' => 'storage/uploads/cars/phantom_top.png', 'is_main' => 0, 'is_top' => 1],
            ['path' => 'storage/uploads/cars/continentalGT_top.png', 'is_main' => 0, 'is_top' => 1],
            ['path' => 'storage/uploads/cars/DB11_top.png', 'is_main' => 0, 'is_top' => 1],
            ['path' => 'storage/uploads/cars/250GTO_top.png', 'is_main' => 0, 'is_top' => 1],
            ['path' => 'storage/uploads/cars/huracan_top.png', 'is_main' => 0, 'is_top' => 1],
            ['path' => 'storage/uploads/cars/GT4_top.png', 'is_main' => 0, 'is_top' => 1],
            ['path' => 'storage/uploads/cars/ghost_top.png', 'is_main' => 0, 'is_top' => 1],
        ];

        foreach ($images as $image) {
            $newImage = new Image();
            $newImage->path = $image['path'];
            $newImage->is_main = $image['is_main'];
            $newImage->is_top = $image['is_top'];
            $newImage->save();
        }
    }
}
