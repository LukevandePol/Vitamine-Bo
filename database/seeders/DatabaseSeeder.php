<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BeschikbareProductenSeeder::class,
            UserSeeder::class,
            KlantgegevensSeeder::class,
//            BestellingSeeder::class,
            ProductSeeder::class,
            AdresSeeder::class,
        ]);


    }
}
