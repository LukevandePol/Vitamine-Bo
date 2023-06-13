<?php

namespace Database\Seeders;

use App\Models\Selectie;
use Illuminate\Database\Seeder;

class SelectieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Selectie::create([
            'product_id' => 1,
            'is_standaard' => true,
            'is_zichtbaar' => true,
        ]);
        Selectie::create([
            'product_id' => 2,
            'is_standaard' => true,
            'is_zichtbaar' => true,
        ]);
        Selectie::create([
            'product_id' => 3,
            'is_standaard' => true,
            'is_zichtbaar' => true,
        ]);
        Selectie::create([
            'product_id' => 4,
            'is_standaard' => true,
            'is_zichtbaar' => true,
        ]);
    }
}
