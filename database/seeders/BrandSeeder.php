<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Ferrari',
                'description' => 'Marchio italiano di auto sportive e supercar, fondato da Enzo Ferrari.',
                'logo_path' => 'ferrari-logo.png',
                'country' => 'Italia',
                'founded_year' => 1939,
            ],
            [
                'name' => 'Lamborghini',
                'description' => 'Auto super sportive con design aggressivo, fondata da Ferruccio Lamborghini.',
                'logo_path' => 'lamborghini-logo.png',
                'country' => 'Italia',
                'founded_year' => 1963,
            ],
            [
                'name' => 'Porsche',
                'description' => 'Auto sportive e di lusso tedesche, famose per la 911 e la Taycan elettrica.',
                'logo_path' => 'porsche-logo.png',
                'country' => 'Germania',
                'founded_year' => 1931,
            ],
            [
                'name' => 'Rolls Royce',
                'description' => 'Auto di lusso britanniche, simbolo di eleganza e status.',
                'logo_path' => 'rolls-royce-logo.png',
                'country' => 'Regno Unito',
                'founded_year' => 1906,
            ],
            [
                'name' => 'Bentley',
                'description' => 'Auto di lusso britanniche, note per interni artigianali e prestazioni.',
                'logo_path' => 'bentley-logo.png',
                'country' => 'Regno Unito',
                'founded_year' => 1919,
            ],
            [
                'name' => 'Aston Martin',
                'description' => 'Auto sportive di lusso, resa famosa da James Bond.',
                'logo_path' => 'aston-martin-logo.png',
                'country' => 'Regno Unito',
                'founded_year' => 1913,
            ],
        ];

        foreach ($brands as $brand) {
            $newBrand = new Brand();

            $newBrand->name = $brand["name"];
            $newBrand->description = $brand["description"];
            $newBrand->logo_path = $brand["logo_path"];
            $newBrand->country = $brand["country"];
            $newBrand->founded_year = $brand["founded_year"];

            $newBrand->save();
        }
    }
}
