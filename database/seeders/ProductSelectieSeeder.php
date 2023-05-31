<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSelectieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //mand
        $mand = [
            [5, 8],
            [6, 8],
            [7, 8],
            [8, 1]
        ];
        foreach ($mand as $product)
            DB::table('product_selectie')
                ->insert([
                    'selectie_id' => '1',
                    'product_id' => $product[0],
                    'aantal' => $product[1]
                ]);
    }
}
