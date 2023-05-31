<?php

namespace Database\Seeders;

use App\Models\Adres;
use Illuminate\Database\Seeder;

class AdresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        adres::create([
            'user_id' => 3,
            'postcode' => '4811TV',
            'huisnummer' => '23',
            'woonplaatsnaam' => 'Leeuwarden',
            'provincienaam' => 'Friesland',
            'voorkeur_type' => 'bezorg'
        ]);

        adres::create([
            'user_id' => 3,
            'postcode' => '8917DD',
            'huisnummer' => '10',
            'woonplaatsnaam' => 'Leeuwarden',
            'provincienaam' => 'Friesland',
            'voorkeur_type' => 'factuur'
        ]);
    }
}
