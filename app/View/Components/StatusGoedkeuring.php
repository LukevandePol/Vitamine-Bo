<?php

namespace App\View\Components;

use App\Models\Bestelling;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatusGoedkeuring extends Component
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
        $redenen = Bestelling::pluck('reden');

        return view('components.dashboard.status-goedkeuring', compact('redenen'));
    }
}
