<x-layout
    title="Bestelling aanpassen"
    header="Bestelling aanpassen"
    beschrijving="Hieronder zie je een overzicht van je bestelling. Deze kun je ook aanpassen.">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <x-cardstripe title="Hoe werkt het?">
                    <p>
                        Hieronder zie je de laatste bestelling,
                        deze kun je aanpassen door rechts fruit en/of pakketten toe te voegen aan je bestelling zodat.
                        Je kunt hier met de & opties het aantal stuks fruit veranderen binnen het maximale aantal van de
                        pakketten.
                        Met kan je een volledig pakket verwijderen.
                        Wil je niks aanpassen aan je bestelling?
                        Dan hoef je niks te doen, wij gaan dan van de laatste levering uit.
                    </p>
                </x-cardstripe>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <x-cardstripe
                    title="Huidige bestelling voor {{$bestelling->bezorgDatum}}"
                    class="bo-hoofdkleur-opacity">
                    @foreach($bestelling->product as $product)
                        <div style="border: 1px red solid">
                            <p>id :{{$product->id}}</p>
                            <p>naam : {{$product->naam}}</p>
                            {{--                            @if($product->inhoud != null)--}}
                            @foreach(json_decode($product->inhoud) as $fruit)
                                <p>fruit: {{$fruit}}</p>
                            @endforeach
                            {{--                            @endif--}}
                        </div>
                    @endforeach
                </x-cardstripe>
            </div>

            <div class="col-sm-6">
                @foreach($beschikbareProducten as $product)
                    <p>{{$product->naam}} {{$product->smaak}}</p>
                @endforeach
            </div>
        </div>

    </div>
</x-layout>
