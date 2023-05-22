@props(['adres'])

<div>
    <p>{{$adres->adres}} {{$adres->huisnummer}}</p>
    <p>{{$adres->postcode}} {{$adres->plaatsnaam}}</p>
    <p>{{$adres->type}}</p>

    <a href="/AdresBewerken/{{$adres->id}}">
        pas adres aan
    </a>

    @if($adres->type == 'niet_gebruikt')
        {{--        <a href="/deleteAdres/{{$adres->id}}">Verwijden</a>--}}
        <form action="deleteAdres/{{$adres->id}}" method="post">
            @csrf
            <x-submit>Verwijderen</x-submit>
        </form>
        <form action="setBezorg/{{$adres->id}}" method="post">
            @csrf
            <x-submit>Bezorgadres</x-submit>
        </form>
        <form action="setFactuur/{{$adres->id}}" method="post">
            @csrf
            <x-submit>Factuuradres</x-submit>
        </form>
    @endif
</div>
