<?php

namespace App\View\Components;

use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class productpopup extends Component
{

    public ?Collection $inhoud = null;
    public ?Collection $producten = null;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public Product $product,
    )
    {
        if ($this->product->type == 'verpakking') {
            $this->inhoud = $this->get_inhoud();
//            dd($this->inhoud);
            $this->producten = $this->get_producten();
        }

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.productpopup');
    }

    private function get_inhoud(): Collection|null
    {
        $selecties = DB::table('selecties')
            ->where('product_id', '=', $this->product->id)
            ->get();

        if ($selecties->has(0)) {
            return DB::table('product_selectie')
                ->where('selectie_id', '=', $selecties[0]->id)
                ->get();
        }

        return null;
    }

    private function get_producten()
    {
        if ($this->inhoud !== null) {
            return Product::whereIn('id', $this->inhoud->pluck('product_id'))->get();
        }

        return null;
    }
}
