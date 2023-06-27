<x-layout title="Bestelling Aanpassing bekijken"
          header="Bestelling bekijken">

    <x-cardstripe title="Bestelling" class="bg-white">
        @if($aangepasteBestelling !== null)
            @foreach($aangepasteBestelling as $selectie)
                @php $selectie = \App\Models\Selectie::find($selectie->selectie_id) @endphp
                <div class="margin-total-list">
                    <div class="item-row">
                        <h5>1x {{\App\Models\Product::find($selectie->product_id)->naam}}</h5>
                    </div>
                </div>
                @if($selectie->products !== null)
                    <ul class="margin-ul-items">
                        @foreach($selectie->products as $product)
                            <li>
                                <div class="item-name">
                                    {{$product->naam}}
                                </div>
                                <div class="item-number-top">
                                    {{\Illuminate\Support\Facades\DB::table('product_selectie')
                                        ->where('product_id', $product->id)
                                        ->where('selectie_id', $selectie->id)
                                        ->get()[0]->aantal
                                    }}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            @endforeach
        @else
            Deze bestelling is leeg. Er ging waarschijnlijk iets mis.
        @endif
    </x-cardstripe>

    <x-cardstripe title="Details Bestelling" class="bg-white">
        <div class="d-flex justify-content-between">
            <div class="flex-column">
                <h2>Bezorg adres</h2>
                <p></p>
                <p>{{$bezorgadres->postcode}}</p>
                <p>{{$bezorgadres->straatnaam}} {{$bezorgadres->huisnummer}}</p>
                <p>{{$bezorgadres->woonplaatsnaam}}, {{$bezorgadres->proficienaam ? : 'Profincie onbekend'}}</p>
            </div>
            @if($factuuradres !== null)
                <div class="flex-column">
                    <h2>Factuur adres</h2>
                    <p></p>
                    <p>{{$factuuradres->postcode}}</p>
                    <p>{{$factuuradres->straatnaam}} {{$factuuradres->huisnummer}}</p>
                    <p>{{$factuuradres->woonplaatsnaam}}, {{$factuuradres->proficienaam ? : 'Profincie onbekend'}}</p>
                </div>
            @else
                <div class="flex-column">
                    <h2>Factuur adres</h2>
                    <p>Factuur adres is bezorgadres</p>
                </div>

            @endif
            <div class="flex-column">
                <h2>Bestelnummer</h2>
                <p>{{$aangepasteBestelling[0]->id}}</p>
            </div>
            <div class="flex-column">
                <h2>Aangepast op</h2>
                <p>{{$aangepasteBestelling[0]->updated_at ? : 'Niet bekend'}}</p>
            </div>
        </div>
    </x-cardstripe>

    <x-card class="mt-3">
        <div class="d-flex justify-content-between">
            <h2>Bestelling Goedkeuren/afkeuren</h2>
            <div class="flex-row d-flex justify-content-between w-25">
                <form action="" method="post">
                    <x-submit>Goedkeuren</x-submit>
                </form>
                <form action="" method="post">
                    <x-submit>Afkeuren</x-submit>
                </form>
            </div>
        </div>
    </x-card>
</x-layout>
