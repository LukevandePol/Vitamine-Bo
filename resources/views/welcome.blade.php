<x-layout title="- Home">
    @auth
        <form method="POST" action="/uitloggen">
            @csrf

            <x-submit>Uitloggen</x-submit>
        </form>
    @else
        <a href="/inloggen">Inloggen</a>
        <a href="/registreren">Registreren</a>
    @endauth
</x-layout>
