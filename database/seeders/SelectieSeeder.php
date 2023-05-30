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
            'naam' => 'Krat'
        ]);

        Selectie::create([
            'naam' => 'Mand'
        ]);

    }
}
