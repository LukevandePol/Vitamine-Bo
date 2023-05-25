<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test admin',
            'email' => 'admin@example.com',
            'email_verified_at' => Now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'rol' => 'administrator',
            'status' => Now(),
        ]);

        User::create([
            'name' => 'Test medewerker',
            'email' => 'medewerker@example.com',
            'email_verified_at' => Now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'rol' => 'bo_medewerker',
            'status' => Now(),
        ]);

        User::create([
            'name' => 'Test klant',
            'email' => 'klant@example.com',
            'email_verified_at' => Now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'rol' => 'klant',
            'status' => Now(),
        ]);

//        User::factory(20)->create();
    }
}
