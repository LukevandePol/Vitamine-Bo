<?php

namespace App\Http\Controllers;

use App\Models\Faq;

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
        $faqs = Faq::all();

        return view('admin.veelgestelde-vragen', compact('faqs'));
    }
}
