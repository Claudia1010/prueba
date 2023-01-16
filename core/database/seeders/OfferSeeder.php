<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Seeder;

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
            'price' => 20

        ])->create();

        Offer::factory([
            'text' => 'Oferta ropa',
            'price' => 40

        ])->create();

        Offer::factory([
            'text' => 'Oferta masajes',
            'price' => 30

        ])->create();

    }
}
