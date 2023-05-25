<x-layout title="Adres Toevoegen">
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{$klantgegevens}}

                <form action="/createAdres/" method="post">
                    @csrf
                    <x-input
                        label="Postcode: "
                        name="postcode"
                    />
                    <x-input
                        label="Huisnummer: "
                        name="huisnummer"
                    />
                    <input
                        type="hidden"
                        name="klantgegevens_id"
                        value="{{$klantgegevens->id}}"
                    />
                    <x-submit>pas aan</x-submit>
                </form>
            </div>
        </div>
    </div>
</x-layout>
