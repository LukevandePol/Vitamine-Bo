<?php

namespace App\View\Components;

use App\Models\Product;
use App\Models\Selectie;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectieItem extends Component
{

    public Selectie $selectie;
    public Product $verpakkingsProduct;

    /**
     * Create a new component instance.
     */
    public function __construct($selectie)
    {
        $this->selectie = $selectie;
        $this->verpakkingsProduct = Product::find($selectie->product_id);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.selectie-item');
    }
}
