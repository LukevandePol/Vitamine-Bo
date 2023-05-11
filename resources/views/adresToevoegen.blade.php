<x-layout :title="'- Adres Toevoegen'">
    {{$klantgegevens}}

    <form action="/createAdres/" method="post">
        @csrf
        <x-input
            label="Postcode: "
            name="postcode"
        />
        <x-input
            label="Adres: "
            name="adres"
        />
        <x-input
            label="Plaatsnaam"
            name="plaatsnaam"
        />
        <input
            type="hidden"
            name="klantgegevens_id"
            value="{{$klantgegevens->id}}"
        />
        <x-submit>pas aan</x-submit>
    </form>
</x-layout>
