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
            UserSeeder::class,
            AdresSeeder::class,
            BestellingSeeder::class,
            ProductSeeder::class,
            SelectieSeeder::class,
            ProductSelectieSeeder::class,
            BestellingSelectieSeeder::class,
            BezorgdatumSeeder::class,
            BestellingBezorgdataSeeder::class,
            FaqSeeder::class,
        ]);

    }
}
