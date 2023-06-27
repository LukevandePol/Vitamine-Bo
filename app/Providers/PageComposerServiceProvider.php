<?php

namespace App\Providers;

use App\Models\Faq;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class PageComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        View::composer('layout.layout', function ($view) {
            $routeName = request()->route()->getName();
            $faqs = Faq::where('page', $routeName)->get();
            $view->with('faqs', $faqs);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
