<x-layout :title="'- Home'">

    <form method="POST" action="/uitloggen">
        @csrf
        @auth
            <button type="submit">Log Out</button>
            <a href="/account">account</a>
        @else
            <a href="/inloggen">Inloggen</a>
            <a href="/registreren">Registreren</a>
        @endauth
    </form>
</x-layout>
