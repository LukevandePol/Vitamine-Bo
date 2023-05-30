<?php

namespace Database\Seeders;

use App\Models\Bezorgdatum;
use Illuminate\Database\Seeder;

class BezorgdatumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bezorgdatum::create([
            'bezorgdatum' => now()
        ]);
    }
}
