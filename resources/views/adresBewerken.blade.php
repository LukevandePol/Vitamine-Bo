<x-layout title="Adres bewerken">
    <div class="container">
        <div class="row">
            <div class="col-12">
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
            </div>
        </div>
    </div>
</x-layout>
