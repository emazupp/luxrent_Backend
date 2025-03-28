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
                'icon_path' => '',
            ],
            [
                'name' => 'Lusso',
                'icon_path' => '',
            ],
            [
                'name' => 'SUV',
                'icon_path' => '',
            ],
            [
                'name' => 'Cabrio',
                'icon_path' => '',
            ],
            [
                'name' => 'Epoca',
                'icon_path' => '',
            ],
            [
                'name' => 'Sportiva',
                'icon_path' => '',
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
