<x-layout :title="'- Adres bewerken'">
    {{$adres}}

    <form action="/updateAdres/{{$adres->id}}" method="post">
        @csrf
        <x-input
            label="Postcode: "
            name="postcode"
            value="{{$adres->postcode}}"
        />
        <x-input
            label="Huisnummer: "
            name="huisnummer"
            value="{{$adres->huisnummer}}"
        />
        <x-input
            label="Plaatsnaam"
            name="plaatsnaam"
            value="{{$adres->plaatsnaam}}"
        />
        <x-submit>pas aan</x-submit>
    </form>
</x-layout>
