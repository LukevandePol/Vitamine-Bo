<x-layout :title="'- Adres bewerken'">
    {{$adres}}

    <form action="/updateAdres/{{$adres->id}}" method="post">
        @csrf
        <x-input label="Postcode: " name="postcode" value="{{$adres->postcode}}"></x-input>
        <x-input label="Adres: " name="adres" value="{{$adres->adres}}"></x-input>
        <x-submit>pas aan</x-submit>
    </form>
</x-layout>
