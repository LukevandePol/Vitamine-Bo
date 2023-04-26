<?php

namespace Database\Factories;

use App\Models\Adres;
use App\Models\Bestelling;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Bestelling>
 */
class BestellingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::all()->pluck('id')->toArray();
        $adres = Adres::all()->pluck('id')->toArray();

        return [
            'prijsInCenten' => $this->faker->numberBetween(1000, 10000),
            'bezorgDatum' => $this->faker->dateTimeBetween('now', '+3 weeks'),
            'betaalDatum' => $this->faker->dateTimeBetween('-2 weeks', 'now'),
            'bezorgAdres' => $this->faker->randomElement($adres),
            'factuurAdres' => $this->faker->randomElement($adres),
            'user_id' => $this->faker->randomElement($user),
        ];
    }


}
