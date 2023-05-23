<?php

namespace Database\Seeders;

use App\Models\BeschikbaarProduct;
use Illuminate\Database\Seeder;

class BeschikbareProductenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BeschikbaarProduct::create([
            'naam' => 'Mandje',
            'inhoud' => json_encode([
                'appel' => 4,
                'banaan' => 8,
                'kiwi' => 4,
            ])
        ]);

        BeschikbaarProduct::create([
            'naam' => 'Vierkante bak',
            'inhoud' => json_encode([
                'appel' => 4,
                'banaan' => 6,
                'kiwi' => 4,
                'mandarijn' => 6,
            ])
        ]);

        BeschikbaarProduct::create([
            'naam' => 'Krat',
            'inhoud' => json_encode([
                'appel' => 4,
                'banaan' => 8,
                'kiwi' => 4,
                'mandarijn' => 6,
            ])
        ]);

        BeschikbaarProduct::create([
            'naam' => 'Houten kist',
            'inhoud' => json_encode([
                'appel' => 10,
                'banaan' => 10,
                'kiwi' => 10,
                'mandarijn' => 10,
            ])
        ]);

        BeschikbaarProduct::create([
            'naam' => 'Smootie',
            'smaak' => 'Banaan',
            'volume' => '1 Liter'
        ]);

        BeschikbaarProduct::create([
            'naam' => 'Smootie',
            'smaak' => 'Aardbij',
            'volume' => '1 Liter'
        ]);
    }
}
