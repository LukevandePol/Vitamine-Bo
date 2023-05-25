<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Selectie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSelectieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $selecties = Selectie::all();
        $products = Product::all();

        foreach ($selecties as $selectie) {
            foreach ($products as $product) {
                DB::table('product_selectie')
                    ->insert([
                        'selectie_id' => $selectie->id,
                        'product_id' => $product->id,
                        'aantal' => 6
                    ]);
            }
        }
    }
}
