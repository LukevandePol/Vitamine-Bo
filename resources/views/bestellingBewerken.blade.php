<x-layout
    title="Bestelling aanpassen"
    header="Bestelling aanpassen"
    beschrijving="Hieronder zie je een overzicht van je bestelling. Deze kun je ook aanpassen.">
    <div class="container">

        <div class="row mb-5">
            <div class="col-12">
                <x-cardstripe title="Hoe werkt het?" class="bg-white">
                    <p>
                        Hieronder zie je de bestelling voor volgende maand,
                        deze kun je aanpassen door rechts fruit en/of pakketten toe te voegen aan je bestelling.
                    </p>
                </x-cardstripe>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                @if($bestelling !== null)
                    <x-cardstripe
                        title="Bestelling voor volgende maand"
                        class="bo-hoofdkleur-opacity">
                        @foreach($bestelling->selecties as $selectie)
                            <div class="margin-total-list">
                                <div class="item-row">
                                    <h5>1x {{\App\Models\Product::find($selectie->product_id)->naam}}</h5>
                                    <div class="icon-container">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                        <form action="/deleteSelectieUitBestelling" method="post">
                                            @csrf
                                            <input type="hidden"
                                                   value="{{$bestelling->id}}"
                                                   name="bestelling_id"
                                            />
                                            <input type="hidden"
                                                   value="{{$selectie->id}}"
                                                   name="selectie_id"
                                            />
                                            <button>
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </form>
                                    </div>
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
                        <div class="d-flex flex-row-reverse">
                            <x-submit>Aanpassing aanvragen</x-submit>
                        </div>
                    </x-cardstripe>
                @else
                    <x-cardstripe
                        title="Nieuwe bestelling"
                        class="bo-hoofdkleur-opacity"
                    >
                        U heeft nog geen bestelling. Voeg elementen rechts toe om een bestelling te maken.
                    </x-cardstripe>
                @endif
            </div>

            <div class="col-sm-6">
                <div class="mb-3">
                    <h2>Standaard pakketten</h2>
                    <div class="scrollable-container d-flex flex-wrap">
                        @foreach($standaardSelecties as $selectie)
                            <x-selectie-item :selectie="$selectie"/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layout>
