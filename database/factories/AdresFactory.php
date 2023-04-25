<?php

namespace Database\Factories;

use App\Models\Klantgegevens;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adres>
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
        $klantgegevens = Klantgegevens::all()->pluck('id')->toArray();

        return [
            'postcode' => $this->faker->postcode,
            'adres' => $this->faker->streetAddress,
            'plaatsnaam' => $this->faker->city,
            'klantgegevens_id' => $this->faker->randomElement($klantgegevens)
        ];
    }
}
