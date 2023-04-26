<?php

namespace Database\Factories;

use App\Models\Fruit;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Fruit>
 */
class FruitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fruit_namen = [
            'appel',
            'mandarijn',
            'banaan',
            'kiwi',
            'sinasappel',
            'peer'
        ];
        $products = Product::all()->pluck('id')->toArray();

        return [
            'naam' => $this->faker->randomElement($fruit_namen),
            'aantal' => $this->faker->randomNumber(1,12),
            'product_id' =>$this->faker->randomElement($products)
        ];
    }
}
