<?php

namespace Database\Factories;

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
        return [
            'postcode' => fake()->postcode(),
            'huisnummer' => fake()->numberBetween(1, 1300),
            'weergavenaam' => fake()->streetName(),
            'straatnaam' => fake()->streetName(),
            'woonplaatsnaam' => fake()->city(),
            'voorkeur_type' => 'bezorg',
        ];
    }
}
