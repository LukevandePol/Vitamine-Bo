<?php

namespace Database\Seeders;

use App\Models\Adres;
use App\Models\Klantgegevens;
use Illuminate\Database\Seeder;

class AdresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $klant_ids = Klantgegevens::all()->pluck('id')->toArray();
//        $klantgegevens = DB::table('klantgegevens')->get();
//        $piet = $klantgegevens->pluck('id');

        foreach ($klant_ids as $klant_id) {
            Adres::factory()->create([
                'klantgegevens_id' => $klant_id,
            ]);
        }
    }
}
