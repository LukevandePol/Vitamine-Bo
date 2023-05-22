<x-layout title="Dashboard" header="Admin Panel">
    <div class="container py-5">
        <span class="h3">Welkom {{ ucwords(auth()->user()->name) }}</span>
    </div>
</x-layout>
