<x-layout title='Account'>
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
                            value="{{$user->email}}"
                        />
                        <x-input
                            label="Naam"
                            type="text"
                            name="naam"
                            value="{{$user->name}}"
                        />
                        <x-submit>pas aan</x-submit>
                    </form>

                    <form action="/updateTelefoon" method="post">
                        @csrf

                        <x-input
                            label="Telefoonnummer"
                            type="text"
                            name="telefoonnummer"
                            value="{{$klantgegevens->telefoonnummer}}"
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
            @foreach($klantgegevens->adres as $adres)
                @if('bezorg' == $adres->type)
                    <div class="col-6">
                        <x-cardstripe title="Bezorgadres">
                            <x-adres :adres="$adres"></x-adres>
                        </x-cardstripe>
                    </div>
                @elseif('factuur' == $adres->type)
                    <div class="col-6">
                        <x-cardstripe title="Factuuradres">
                            <x-adres :adres="$adres"></x-adres>
                        </x-cardstripe>
                    </div>
                @endif
            @endforeach
        </div>

        @if(count($klantgegevens->adres) >= 3)
            <h2>Overige Adressen</h2>
            @foreach($klantgegevens->adres as $adres)
                @if('niet_gebruikt' == $adres->type)
                    <div class="row">
                        <x-adres :adres="$adres"></x-adres>
                    </div>
                @endif
            @endforeach
        @endif


    </div>
</x-layout>
