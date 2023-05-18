@props(['adres'])

<div>
    <p>{{$adres->id}}</p>
    <p>Postcode: {{$adres->postcode}}</p>
    <p>Huisnummer: {{$adres->huisnummer}}</p>
    <p>Adres: {{$adres->adres}}</p>
    <p>Plaatsnaam: {{$adres->plaatsnaam}}</p>
    <p>Type: {{$adres->type}}</p>

    <a href="/AdresBewerken/{{$adres->id}}">
        <button name="aanpassen" type="button">pas adres aan</button>
    </a>

    <form action="/deleteAdres/{{$adres->id}}" method="post">
        @csrf
        <x-submit>Verwijderen</x-submit>
    </form>
</div>
