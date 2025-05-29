<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Supercar',
                'icon_path' => 'storage/uploads/icons/supercar.png',
            ],
            [
                'name' => 'Lusso',
                'icon_path' => 'storage/uploads/icons/luxcar.png',
            ],
            [
                'name' => 'SUV',
                'icon_path' => 'storage/uploads/icons/suv.png',
            ],
            [
                'name' => 'Cabrio',
                'icon_path' => 'storage/uploads/icons/cabriolet.png',
            ],
            [
                'name' => 'Epoca',
                'icon_path' => 'storage/uploads/icons/vintage.png',
            ],
            [
                'name' => 'Sportiva',
                'icon_path' => 'storage/uploads/icons/sport.png',
            ],
        ];

        foreach ($categories as $category) {
            $newCategory = new Category();

            $newCategory->name = $category["name"];
            $newCategory->icon_path = $category["icon_path"];

            $newCategory->save();
        }
    }
}
