<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use App\Models\Bestelling;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bestelling>
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
        return [
            'prijsInCenten' => $this->faker->numberBetween(1000,10000),
            'gemaaktOpDatum' => $this->faker->dateTimeBetween('-3 weeks', 'now'),
            'bezorgDatum' => $this->faker->dateTimeBetween( 'now', '+3 weeks'),
            'betaalDatum' => $this->faker->dateTimeBetween('-2 weeks', 'now'),
        ];


    }


}
