<?php

namespace App\View\Components;

use App\Models\Faq;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Aardbei extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $routeName = request()->route()->getName();
        $faqs = Faq::where('page', $routeName)->get();

        return view('components.aardbei', compact('faqs'));
    }
}
