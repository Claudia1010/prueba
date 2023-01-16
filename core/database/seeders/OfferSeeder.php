<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Offer::factory([
            'text' => 'Oferta restaurante',
            'price' => 20,
            'code' => Str::random(10)

        ])->create();

        Offer::factory([
            'text' => 'Oferta ropa',
            'price' => 40,
            'code' => Str::random(10)

        ])->create();

        Offer::factory([
            'text' => 'Oferta masajes',
            'price' => 30,
            'code' => Str::random(10)

        ])->create();

    }
}
