@props(['adres'])

<div>
    <p>{{$adres->id}}</p>
    <p>Postcode: {{$adres->postcode}}</p>
    <p>Adres: {{$adres->adres}}</p>
    <p>Plaatsnaam: {{$adres->plaatsnaam}}</p>

    <a href="/AdresBewerken/{{$adres->id}}">
        <button name="aanpassen" type="button">pas adres aan</button>
    </a>
    <button>verwijderen</button>
</div>