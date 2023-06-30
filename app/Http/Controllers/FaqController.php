<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class FaqController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'question' => ['required'],
            'answer' => ['required'],
            'page' => ['required']
        ]);

        Faq::create([
            'question' => $attributes['question'],
            'answer' => $attributes['answer'],
            'page' => $attributes['page'],
        ]);

        return back()->with('success', 'De vraag is succesvol toegevoegd.');
    }

    public function create()
    {
        $routes = collect(Route::getRoutes())->filter(function ($route) {
            return $route->getName() !== null;
        })->map(function ($route) {
            return [
                'uri' => $route->uri(),
                'name' => $route->getName(),
                'action' => ltrim($route->getActionName(), '\\'),
                'method' => implode('|', $route->methods()),
            ];
        });

        $faqs = Faq::all();

        return view('admin.veelgestelde-vragen', compact('faqs', 'routes'));
    }

    public function edit($id)
    {
        $attributes = request()->validate([
            'question' => ['required'],
            'answer' => ['required'],
            'page' => ['required']
        ]);

        DB::table('faqs')
            ->where('id', $id)
            ->update([
                'question' => $attributes['question'],
                'answer' => $attributes['answer'],
                'page' => $attributes['page']
            ]);

        return back()->with('success', 'De vraag is succesvol aangepast');
    }

    public function destroy($id)
    {
        Faq::findOrFail($id)->delete();

        return back()->with('success', 'De vraag is succesvol verwijderd');
    }
}
