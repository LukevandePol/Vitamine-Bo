<?php

namespace Database\Factories;

use App\Models\Klantgegevens;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Klantgegevens>
 */
class KlantgegevensFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kvkNummer' => $this->faker->NumberBetween(10000000, 99999999),
            'telefoonnummer' => $this->faker->phoneNumber(),
//            'aanpassingBevestigdDatum' => null,
            'user_id' => User::factory(),
        ];
    }

    public function aanpassingBevestigd(): static
    {
        return $this->state(fn(array $attributes) => [
            'aanpassingBevestigdDatum' => now(),
        ]);
    }
}
