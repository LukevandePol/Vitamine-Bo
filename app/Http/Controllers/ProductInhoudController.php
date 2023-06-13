<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductInhoudController extends Controller
{
    public function createProductInhoud($product_id)
    {
        $selectie = DB::table('selecties')
            ->where('product_id', '=', $product_id)
            ->limit(1)
            ->get();

        $inhoud = DB::table('product_selectie')
            ->where('selectie_id', '=', $selectie[0]->id)
            ->get();

        return view('admin.product-inhoud', [
            'selectie' => $selectie[0],
            'inhoud' => $inhoud,
        ]);
    }

    public function verpakkingInhoudToevoegen()
    {
        try {
            $attributes = request()->validate([
                'selectie_id' => ['required'],
                'product_id' => ['required'],
                'aantal' => ['required', 'min:1']
            ]);

            DB::table('product_selectie')
                ->updateOrInsert(
                    [
                        'selectie_id' => $attributes['selectie_id'],
                        'product_id' => $attributes['product_id'],
                    ],
                    ['aantal' => $attributes['aantal']]
                );
            return back()->with('success', 'Inhoud aangepast');
        } catch (\Exception $e) {
            return back()->with('error', 'Oeps! Er ging iets mis');
        }
    }

    public
    function deleteVerpakkingInhoud()
    {
        try {
            $attributes = \request()->validate([
                'product_id' => ['required'],
                'selectie_id' => ['required'],
            ]);
            try {
                DB::table('product_selectie')
                    ->where('product_id', '=', $attributes['product_id'])
                    ->where('selectie_id', '=', $attributes['selectie_id'])
                    ->delete();
                return back()->with('success', 'Inhoud verwijderd!');
            } catch (\Exception $e) {
                return back()->with('error', 'Kon inhoud niet verwijderen');
            }
        } catch (\Exception $e) {
            return back()->with('error', 'Oeps Er ging iets mis');
        }
    }
}
