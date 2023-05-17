<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Adres;
use App\Models\Bestelling;
use App\Models\Fruit;
use App\Models\Klantgegevens;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory()->create([
             'name' => 'Test admin',
             'email' => 'admin@example.com',
             'email_verified_at' => Now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'rol' => 'administrator',
             'status' => Now(),
         ]);

        User::factory()->create([
            'name' => 'Test medewerker',
            'email' => 'medewerker@example.com',
            'email_verified_at' => Now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'rol' => 'bo_medewerker',
            'status' => Now(),
        ]);

        User::factory()->create([
            'name' => 'Test klant',
            'email' => 'klant@example.com',
            'email_verified_at' => Now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'rol' => 'klant',
            'status' => Now(),
        ]);

        User::factory(10)->create();

        Adres::factory()->create([
            'postcode' => '1234 AB',
            'adres' => 'langenaamweg 12',
            'plaatsnaam' => 'testdorp'
        ]);

        Adres::factory()->create([
            'postcode' => '4567 CD',
            'adres' => 'Straatnaam 345',
            'plaatsnaam' => 'Stadnaam'
        ]);

        Adres::factory(5)->create();

        Klantgegevens::factory()->create([
            'kvkNummer' => 12345678,
            'telefoonnummer' => '0612345678',
            'bezorgAdres' => 1,
            'factuurAdres' => 2,
        ]);

        Klantgegevens::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Bestelling::factory(10)->create();

        Product::factory(100)->create();

        Fruit::factory(500)->create();

    }
}
