<?php

namespace Database\Seeders;

use App\Models\Bestelling;
use App\Models\Bezorgdatum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BestellingBezorgdataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bezorgdatums = Bezorgdatum::all();
        $bestellings = Bestelling::all();

        foreach ($bestellings as $bestelling) {
            foreach ($bezorgdatums as $bezorgdatum) {
                DB::table('bestelling_bezorgdatum')
                    ->insert([
                        'bestelling_id' => $bestelling->id,
                        'bezorgdatum_id' => $bezorgdatum->id,
                    ]);
            }
        }
    }
}
