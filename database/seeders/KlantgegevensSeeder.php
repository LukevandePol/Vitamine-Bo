<?php

namespace Database\Seeders;

use App\Models\Adres;
use App\Models\Bestelling;
use App\Models\Klantgegevens;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class KlantgegevensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Klantgegevens::factory()
            ->for(User::factory()->state([
                'name' => 'Test klant',
                'email' => 'klant@example.com',
                'email_verified_at' => Now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'rol' => 'klant',
                'status' => Now(),
            ]))
            ->has(
                Bestelling::factory()
                    ->count(3)
                    ->has(
                        Product::factory(3)
                    )
            )
            ->has(
                Adres::factory()->state([
                    'postcode' => '1234AB',
                    'huisnummer' => '12',
                    'plaatsnaam' => 'Leeuwarden',
                    'type' => 'bezorg'
                ])
            )
            ->has(
                Adres::factory()->state([
                    'postcode' => '5678CD',
                    'huisnummer' => '34',
                    'plaatsnaam' => 'Sneek',
                    'type' => 'factuur'
                ])
            )
            ->create();

        //        $user = User::all()->pluck('id')->toArray();
//        $adres = Adres::all()->pluck('id')->toArray();
    }
}
