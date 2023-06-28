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
                <p>{{$bezorgadres->woonplaatsnaam}}, {{$bezorgadres->provincienaam ? : 'provincie onbekend'}}</p>
            </div>
            @if($factuuradres !== null)
                <div class="flex-column">
                    <h2>Factuur adres</h2>
                    <p></p>
                    <p>{{$factuuradres->postcode}}</p>
                    <p>{{$factuuradres->straatnaam}} {{$factuuradres->huisnummer}}</p>
                    <p>{{$factuuradres->woonplaatsnaam}}, {{$factuuradres->provincienaam ? : 'provincie onbekend'}}</p>
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
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#goedkeurenModal">
                    Goedkeuren
                </button>

            </div>
        </div>

    </x-card>
</x-layout>

<!-- Modal -->
<div class="modal fade" id="goedkeurenModal" tabindex="-1" aria-labelledby="bestellingGoedkeuren" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5" id="bestellingGoedkeuren">Goedkeuren</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/admin/BestellingGoedkeuren" method="post">
                    @csrf
                    <input type="hidden" value="{{$aangepasteBestelling[0]->id}}" name="bestelling_id">
                    <x-input
                        type="number"
                        label="Prijs in eurocenten"
                        name="prijs_in_centen"
                    />
                    <div class="row">
                        <div class="col-12">
                            <label for="goedkeuren">
                                Reden voor goedkeuren
                            </label>
                            <textarea name="reden" id="goedkeuren"
                                      class="form-control"
                                      cols="10"
                                      rows="8">
                            </textarea>
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse mt-3">
                        <x-submit>Bevestigen</x-submit>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

