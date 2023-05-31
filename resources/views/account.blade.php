<x-layout title="Account" header="Account" beschrijving="Hier kunt u uw accountgegevens controleren en aanpassen">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-cardstripe
                    title="Accountgegevens">
                    <form action="/updateUser" method="POST">
                        @csrf
                        <x-input
                            label="E-mailadres"
                            type="email"
                            name="email"
                            value="{{auth()->user()->email}}"
                        />
                        <x-input
                            label="Naam"
                            type="text"
                            name="naam"
                            value="{{auth()->user()->name}}"
                        />
                        <x-input
                            label="Telefoonnummer"
                            type="text"
                            name="telefoon"
                            value="{{auth()->user()->telefoon}}"
                        />
                        <x-input
                            label="KVK nummer"
                            type="text"
                            name="kvk_nummer"
                            value="{{auth()->user()->kvk_nummer}}"
                        />
                        <x-buttonicon class="mt-4">Aanpassen</x-buttonicon>
                    </form>
                </x-cardstripe>
            </div>
        </div>

        <div class="d-flex justify-content-between mt-5">
            @foreach($adressen as $adres)
                @if($adres->voorkeur_type == 'bezorg')
                    <x-adres :adres="$adres"></x-adres>
                @elseif($adres->voorkeur_type == 'factuur')
                    <x-adres :adres="$adres"></x-adres>
                @endif
            @endforeach
            @if(count($adressen) < 2)
                <x-card class="small-card">
                    <h3>Bezorgadres is factuuradres</h3>
                    <p>
                        Uw factuuradres is nu hetzelfde als het bezorgadres.
                        Wilt u een ander factuuradres? Dan moet u deze toevoegen.
                    </p>
                    <x-a href="/AdresToevoegen">Adres toevoegen</x-a>
                </x-card>
            @endif
        </div>

    </div>
</x-layout>
