<x-layout
    title="Bestelling aanpassen"
    header="Bestelling aanpassen"
    beschrijving="Hieronder zie je een overzicht van je bestelling. Deze kun je ook aanpassen.">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <x-cardstripe title="Hoe werkt het?">
                    <p>
                        Hieronder zie je de bestelling voor volgende maand,
                        deze kun je aanpassen door rechts fruit en/of pakketten toe te voegen aan je bestelling zodat.
                        Je kunt hier met de & opties het aantal stuks fruit veranderen binnen het maximale aantal van de
                        pakketten.
                    </p>
                </x-cardstripe>
            </div>
        </div>

        <div class="row">
            @if($bestelling !== null)
                <div class="col-sm-6">
                    <x-cardstripe
                        title="Bestelling voor volgende maand"
                        class="bo-hoofdkleur-opacity">
                        @foreach($bestelling->selecties as $selectie)
                            <p>{{$selectie->naam}}</p>
                            @if($selectie->products !== null)
                                <ul>
                                    @foreach($selectie->products as $product)
                                        <li>
                                            {{$product->naam}}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @endforeach
                    </x-cardstripe>
                </div>
            @else
                <div class="col-sm-6">
                    <x-cardstripe
                        title="Nieuwe bestelling"
                        class="bo-hoofdkleur-opacity"
                    >
                        U heeft nog geen bestelling. Voeg elementen rechts toe om een bestelling te maken.
                    </x-cardstripe>
                </div>
            @endif

            <div class="col-sm-6 scrollable-container d-flex flex-wrap">
                @foreach($selecteerbareProducten as $product)
                    @if($product->is_zichtbaar)
                        <x-productitem :product="$product"/>
                    @endif
                @endforeach
            </div>

        </div>

    </div>
</x-layout>
