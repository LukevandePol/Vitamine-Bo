<?php

namespace Database\Seeders;

use App\Models\Bestelling;
use Illuminate\Database\Seeder;

class BestellingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bestelling::factory(10)->create();
    }
}
