<?php

namespace Database\Factories;

use App\Models\BeschikbaarProduct;
use App\Models\Bestelling;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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

        $beschikbare_producten = BeschikbaarProduct::all();

        $product_namen = $beschikbare_producten->pluck('naam');
        $product_inhoud = $beschikbare_producten->pluck('inhoud');

        return [
            'naam' => $this->faker->randomElement($product_namen),
            'bestelling_id' => Bestelling::factory($product_inhoud)
        ];
    }
}
