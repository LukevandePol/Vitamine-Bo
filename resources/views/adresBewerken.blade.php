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
            label="Adres: "
            name="adres"
            value="{{$adres->adres}}"
        />
        <x-input
            label="Plaatsnaam"
            name="plaatsnaam"
            value="{{$adres->plaatsnaam}}"
        />
        <x-submit>pas aan</x-submit>
    </form>
</x-layout>
