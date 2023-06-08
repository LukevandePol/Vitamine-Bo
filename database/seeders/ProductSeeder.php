<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Product::create([
            'naam' => 'Mand',
            'type' => 'verpakking',
            'afbeelding_pad' => 'images/producten/Vitamine-Bo-Mand.png',
            'is_zichtbaar' => true,
        ]);

        Product::create([
            'naam' => 'Robuuste Bak',
            'type' => 'verpakking',
            'afbeelding_pad' => 'images/producten/Vitamine-Bo-Robuuste-Bak.png',
            'is_zichtbaar' => true,
        ]);

        Product::create([
            'naam' => 'Grote Schaal',
            'type' => 'verpakking',
            'afbeelding_pad' => 'images/producten/Vitamine-Bo-Grote-Schaal.png',
            'is_zichtbaar' => true,
        ]);

        Product::create([
            'naam' => 'Houten Kist',
            'type' => 'verpakking',
            'afbeelding_pad' => 'images/producten/Vitamine-Bo-Houten-Kist.png',
            'is_zichtbaar' => true,
        ]);

        Product::create([
            'naam' => 'appel',
            'type' => 'fruit',
            'afbeelding_pad' => '/appel',
            'is_zichtbaar' => true,
        ]);

        Product::create([
            'naam' => 'kiwi',
            'type' => 'fruit',
            'afbeelding_pad' => '/kiwi',
            'is_zichtbaar' => true,
        ]);

        Product::create([
            'naam' => 'banaan',
            'type' => 'fruit',
            'afbeelding_pad' => '/banaan',
            'is_zichtbaar' => true,
        ]);

        Product::create([
            'naam' => 'snoeptomaatjes',
            'type' => 'fruit',
            'afbeelding_pad' => '/snoeptomaat',
            'is_zichtbaar' => true,
        ]);


    }
}
