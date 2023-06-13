@props(['adres'])
<x-card class="small-card">
    <form action="/updateAdres/{{$adres->id}}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <h3>{{$adres->voorkeur_type}}adres</h3>
                <p>{{$adres->huisnummer}} {{$adres->weergavenaam}}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 my-3">
                <x-input
                    label="Postcode"
                    name="postcode"
                    value="{{$adres->postcode}}"
                />
            </div>
            <div class="col-sm-6 my-3">
                <x-input
                    label="Huisnummer"
                    name="huisnummer"
                    value="{{$adres->huisnummer}}"
                />
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-12">
                <x-buttonicon class="mt-2">Aanpassen</x-buttonicon>
            </div>
        </div>
    </form>
</x-card>
