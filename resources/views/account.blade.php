<x-layout :title="'- Account'">
    <p>{{$user}}</p>

    <form action="/updateUser" method="POST">
        @csrf
        <x-input
            label="E-mailadres:"
            type="email"
            name="email"
            value="{{$user->email}}"
        />
        <x-input
            label="Naam"
            type="text"
            name="naam"
            value="{{$user->name}}"
        />
        <x-submit>pas aan</x-submit>
    </form>

    <form action="/updateTelefoon" method="post">
        @csrf

        <x-input
            label="Telefoonnummer"
            type="text"
            name="telefoonnummer"
            value="{{$klantgegevens->telefoonnummer}}"
        />
        <x-submit>pas aan</x-submit>
    </form>

    <x-adres :adres="$bezorgAdres"></x-adres>

    @if($factuurAdres)
        <x-adres :adres="$factuurAdres"></x-adres>
    @else
        {{--        <a href="/AdresToevoegen">Adres toevoegen</a>--}}
        factuuradres is nu hetzelfde als het bezorgadres.
        Voeg een factuuradres toe als het naar een ander adres moet.
    @endif
</x-layout>
