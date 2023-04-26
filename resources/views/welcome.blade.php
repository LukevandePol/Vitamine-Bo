<x-layout title="- Home">
    @auth
        <form method="POST" action="/uitloggen">
            @csrf

            <button type="submit">Log Out</button>
        </form>
    @else
        <a href="/inloggen">Inloggen</a>
        <a href="/registreren">Registreren</a>
    @endauth
</x-layout>
