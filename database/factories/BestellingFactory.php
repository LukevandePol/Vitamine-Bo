<?php

namespace Database\Factories;

use App\Models\Bestelling;
use App\Models\Klantgegevens;
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
//        $user = User::all()->pluck('id')->toArray();
//        $adres = Adres::all()->pluck('id')->toArray();

        return [
            'prijsInCenten' => $this->faker->numberBetween(1000, 200000),
            'bezorgDatum' => $this->faker->dateTimeBetween('now', '+4 weeks'),
            'betaalDatum' => null,
            'klantgegevens_id' => Klantgegevens::factory(),
//            'bezorgAdres' => $this->faker->randomElement($adres),
//            'factuurAdres' => $this->faker->randomElement($adres),
//            'user_id' => $this->faker->randomElement($user),
        ];
    }

    public function betaald(): static
    {
        return $this->state(fn(array $attributes) => [
            'betaalDatum' => now(),
        ]);
    }


}
