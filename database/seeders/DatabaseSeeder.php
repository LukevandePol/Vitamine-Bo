<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
             'rol' => 'administrator'
         ]);

        User::factory()->create([
            'name' => 'Test medewerker',
            'email' => 'medewerker@example.com',
            'email_verified_at' => Now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'rol' => 'bo_medewerker'
        ]);

        User::factory()->create([
            'name' => 'Test klant',
            'email' => 'klant@example.com',
            'email_verified_at' => Now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'rol' => 'klant'
        ]);

        User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Bestelling::factory(10)->create();

        Product::factory(100)->create();

        Fruit::factory(500)->create();

        Klantgegevens::factory(3)->create();
    }
}
