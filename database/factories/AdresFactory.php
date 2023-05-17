<?php

namespace Database\Factories;

use App\Models\Adres;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Adres>
 */
class AdresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
//        $klantgegevens = Klantgegevens::all()->pluck('id')->toArray();

        return [
            'postcode' => $this->faker->postcode,
            'huisnummer' => $this->faker->numberBetween(1, 1300),
            'adres' => $this->faker->streetAddress,
            'plaatsnaam' => $this->faker->city,
        ];
    }
}
