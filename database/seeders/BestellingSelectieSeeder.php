<?php

namespace Database\Seeders;

use App\Models\Bestelling;
use App\Models\Selectie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BestellingSelectieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bestellings = Bestelling::all();
        $selecties = Selectie::all();

        foreach ($bestellings as $bestelling) {
            foreach ($selecties as $selectie) {
                DB::table('bestelling_selectie')
                    ->insert([
                        'bestelling_id' => $bestelling->id,
                        'selectie_id' => $selectie->id,
                        'aantal' => 2
                    ]);
            }
        }

        DB::table('bestelling_selectie')
            ->insert([
                'selectie_id' => 2,
                'aantal' => 1
            ]);

    }
}
