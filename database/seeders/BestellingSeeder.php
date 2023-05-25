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
        Bestelling::create([
            'user_id' => 3,
//            'bezorgadres_id' => 1,
//            'factuuradres_id' => 2,
        ]);
    }
}
