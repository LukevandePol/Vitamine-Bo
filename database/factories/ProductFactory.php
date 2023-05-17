<?php

namespace Database\Factories;

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
        $product_namen = [
            'krat',
            'mandje',
            'vierkante bak',
            'houten kist',
            'brievenbus flessenpost',
            'duo brievenbus flessenpost',
            'flessenpost meloen',
            'flessenpost perzik',
            'flessenpost spinazie',
            'flessenpost bosvruchten',
            'flessenpost aardbei',
            'flessenpost sinaasappel'
        ];
//        $bestellings = Bestelling::all()->pluck('id')->toArray();

        return [
            'naam' => $this->faker->randomElement($product_namen),
            'bestelling_id' => Bestelling::factory()
        ];
    }
}
