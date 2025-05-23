<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(BrandSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CarSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(CarImageSeeder::class);
    }
}
