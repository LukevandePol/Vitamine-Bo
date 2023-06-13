<?php

namespace App\View\Components;

use App\Models\Product;
use App\Models\Selectie;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class SelectiePopup extends Component
{
    public Selectie $selectie;
    public Product $verpakkingsProduct;

    public array $inhoud;

    /**
     * Create a new component instance.
     */
    public function __construct($selectie)
    {
        $this->selectie = $selectie;
        $this->verpakkingsProduct = Product::find($selectie->product_id);
//        $this->inhoud = $selectie->products;

        $product_selectie = DB::table('product_selectie')
            ->where('selectie_id', $selectie->id)
            ->get();

//        dd($test[0]);
        foreach ($product_selectie as $ps) {
            $test = [
                'aantal' => $ps->aantal,
                'naam' => Product::find($ps->product_id)->naam,
            ];

            $this->inhoud[] = $test;

        }
//        dd($this->inhoud);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.selectie-popup');
    }
}
