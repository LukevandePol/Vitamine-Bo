<x-layout :title="'- Account'">

    <a href="/">home</a>

    <p>{{$user}}</p>

    <p>{{$klantgegevens}}</p>

    <p>{{$adressen}}</p>

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

    <a href="/AdresToevoegen">Adres toevoegen</a>

    @foreach($adressen as $adres)
        <x-adres :adres="$adres"></x-adres>
    @endforeach
</x-layout>
