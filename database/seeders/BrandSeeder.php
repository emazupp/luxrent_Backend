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
                'description' => 'Sfreccia con il sogno italiano: guida una Ferrari e vivi l’adrenalina pura delle piste, anche su strada. Con LuxRent, il mito di Maranello è finalmente a portata di mano.',
                'logo_path' => 'storage/logos/ferrari-logo.png',
                'country' => 'Italia',
                'founded_year' => 1939,
            ],
            [
                'name' => 'Lamborghini',
                'description' => 'Design estremo, motore ruggente e presenza scenica inconfondibile. Affitta una Lamborghini con LuxRent e conquista ogni sguardo. È più di un’auto: è una dichiarazione di potenza.',
                'logo_path' => 'storage/logos/lamborghini-logo.png',
                'country' => 'Italia',
                'founded_year' => 1963,
            ],
            [
                'name' => 'Porsche',
                'description' => 'Eleganza sportiva e tecnologia tedesca all’avanguardia. Una Porsche non si guida, si sente. Noleggiala con LuxRent e scopri cosa significa dominare la strada con classe e precisione.',
                'logo_path' => 'storage/logos/porsche-logo.png',
                'country' => 'Germania',
                'founded_year' => 1931,
            ],
            [
                'name' => 'Rolls Royce',
                'description' => 'Vuoi provare il vero lusso su quattro ruote? Una Rolls Royce è l’esperienza definitiva. Affittala con LuxRent e lasciati cullare da un’eleganza senza tempo e senza compromessi.',
                'logo_path' => 'storage/logos/rolls-royce-logo.png',
                'country' => 'Regno Unito',
                'founded_year' => 1906,
            ],
            [
                'name' => 'Bentley',
                'description' => 'Prestazioni e raffinatezza in perfetto equilibrio. Con Bentley, ogni viaggio diventa esclusivo. LuxRent ti offre la possibilità di vivere il comfort inglese con anima sportiva.',
                'logo_path' => 'storage/logos/bentley-logo.png',
                'country' => 'Regno Unito',
                'founded_year' => 1919,
            ],
            [
                'name' => 'Aston Martin',
                'description' => 'Sali a bordo dell’auto di James Bond e vivi un’esperienza di guida iconica. L’Aston Martin è eleganza, potenza e fascino britannico. Solo con LuxRent puoi provarla davvero.',
                'logo_path' => 'storage/logos/aston-martin-logo.png',
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
