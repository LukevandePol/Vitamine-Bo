<x-layout title="- Dashboard">
    <span class="h3">Welkom {{ ucwords(auth()->user()->name) }}</span><br>
    <form class="mt-5" method="POST" action="/uitloggen">
        @csrf

        <button type="submit" class="btn btn-primary">Log Out</button>
    </form>
</x-layout>
