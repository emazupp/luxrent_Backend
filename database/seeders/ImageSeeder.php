<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    public function run()
    {
        $images = [
            ['path' => 'storage/uploads/cars/imAbksSqjJKa4L8H0orKdjtY70HyepqYCri7gshu.png', 'is_main' => 1],
            ['path' => 'storage/uploads/cars/iJqcp8BbKIqxFJrMGgv6JzbnEAAc0DVVqeqIG97L.png', 'is_main' => 1],
            ['path' => 'storage/uploads/cars/1GFchcvGgyZIEWWXQmOR2wpmdoYJW8JayaPbHZq1.png', 'is_main' => 1],
            ['path' => 'storage/uploads/cars/NN4IvY4j0dtlU6HlUPRfh3XR3Y5iHRPiaqctaTef.png', 'is_main' => 1],
            ['path' => 'storage/uploads/cars/7mRVoIQfVsnxOL86N95HcdA36ARBQUHMIbbH3UbD.png', 'is_main' => 1],
            ['path' => 'storage/uploads/cars/CpymjqNpczsXoDMcVA0SEwf7Mw8wjed0kR0NnNc4.png', 'is_main' => 1],
            ['path' => 'storage/uploads/cars/I4VBojoRrlNiVLIxuhbuSHeVdHOCtb6rsn6VkRmU.png', 'is_main' => 1],
            ['path' => 'storage/uploads/cars/aVlEimAW2dokUNoeGx5lVy4lPUb5UvTgxFPQ00DV.png', 'is_main' => 1],
            ['path' => 'storage/uploads/cars/TzH2ZPw81bHKEOyJuYp2h7mFh5p4cCHeLi6vxgPu.png', 'is_main' => 1],
            ['path' => 'storage/uploads/cars/T4EV5jQaXYlXP3kqbjfklMLlVPNNkR5Qzmb4zxLm.png', 'is_main' => 1],
        ];

        foreach ($images as $image) {
            $newImage = new Image();
            $newImage->path = $image['path'];
            $newImage->is_main = $image['is_main'];
            $newImage->save();
        }
    }
}
