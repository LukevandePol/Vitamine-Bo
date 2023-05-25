<x-layout title="Account" header="Account" beschrijving="Hier kunt u uw accountgegevens controleren en aanpassen">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <x-card>
                    <form action="/updateUser" method="POST">
                        @csrf
                        <x-input
                            label="E-mailadres:"
                            type="email"
                            name="email"
                            value="{{auth()->user()->email}}"
                        />
                        <x-input
                            label="Naam:"
                            type="text"
                            name="naam"
                            value="{{auth()->user()->name}}"
                        />
                        <x-input
                            label="Telefoonnummer:"
                            type="text"
                            name="telefoon"
                            value="{{auth()->user()->telefoon}}"
                        />
                        <x-input
                            label="KVK nummer:"
                            type="text"
                            name="kvk_nummer"
                            value="{{auth()->user()->kvk_nummer}}"
                        />
                        <x-submit>pas aan</x-submit>
                    </form>
                </x-card>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="/AdresToevoegen">Adres toevoegen</a>
            </div>
        </div>

        <div class="row">
            @foreach($adressen as $adres)
                @if($adres->voorkeur_type == 'bezorg')
                    <div class="col-6">
                        <x-cardstripe title="Bezorgadres">
                            <x-adres :adres="$adres"></x-adres>
                        </x-cardstripe>
                    </div>
                @elseif($adres->voorkeur_type == 'factuur')
                    <div class="col-6">
                        <x-cardstripe title="Factuuradres">
                            <x-adres :adres="$adres"></x-adres>
                        </x-cardstripe>
                    </div>
                @elseif($adres->voorkeur_type == 'niet_voorkeur')
                    <h2>Overige Adres</h2>
                    <x-adres :adres="$adres"></x-adres>
                @endif
            @endforeach
        </div>

    </div>
</x-layout>
