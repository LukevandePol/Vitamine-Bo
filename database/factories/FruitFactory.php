<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fruit>
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
            'sinasappel'
        ];
        $products = Product::all()->pluck('id')->toArray();

        return [
            'naam' => $this->faker->randomElement($fruit_namen),
            'product_id' =>$this->faker->randomElement($products)
        ];
    }
}
