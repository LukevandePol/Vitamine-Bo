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

    @foreach($adressen as $adres)
        <div>
            <p>{{$adres->id}}</p>
            <p>Postcode: 1234 ab</p>
            <p>Adres: weg 12</p>
            <p>Plaatsnaam: Dorp</p>

            <a href="/AdresBewerken/{{$adres->id}}">
                <button name="aanpassen" type="button">pas adres aan</button>
            </a>
            <button>verwijderen</button>
        </div>
    @endforeach
</x-layout>
