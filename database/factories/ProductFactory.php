<?php

namespace Database\Factories;

use App\Models\Bestelling;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $bestellings = Bestelling::all()->pluck('id')->toArray();

        return [
            'naam' => $this->faker->name(),
            'bestelling_id' => $this->faker->randomElement($bestellings)
        ];
    }
}
