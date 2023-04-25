<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Klantgegevens>
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
        $users = User::all()->pluck('id')->toArray();

        return [
            'kvkNummer' => $this->faker->NumberBetween(10000000, 99999999),
            'telefoonnummer' => $this->faker->phoneNumber(),
            'aanpassingBevestigdDatum' => $this->faker->dateTimeBetween('-5 weeks', 'now'),
            'user_id' => $this->faker->randomElement($users)
        ];
    }
}
