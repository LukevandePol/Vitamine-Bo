<x-layout title="Inhoud toevoegen">
    <div class="row">
        <div class="col-7">
            <div class="card-containerproduc">
                @foreach(\App\Models\Product::all()->where('type', '=', 'fruit') as $product)
                    <div class="mb-3">
                        <x-cardstripe :title="$product->naam" class="font-stylecard">
                            <form action="/verpakkingInhoudToevoegen" method="post">
                                @csrf
                                <input type="hidden" name="selectie_id" value="{{$selectie->id}}">
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <div class="form-length">
                                    <x-input name="aantal" label="aantal"/>
                                </div>
                                <x-submit class="small-button">Toevoegen</x-submit>
                            </form>
                        </x-cardstripe>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="col-5">
            <x-cardstripe class="bo-hoofdkleur-opacity title-smaller" title="Inhoud {{ $selectie->naam }}">
                @if($inhoud !== null && count($inhoud) > 0)
                    <div class="inhoud-lijst">
                        @foreach($inhoud as $item)
                            @php $product = \App\Models\Product::find($item->product_id)@endphp
                            <div class="inhoud-lijst-item d-flex justify-content-between">
                                <div class="text-container">
                                    <p>{{$item->aantal}}</p>
                                    <p>{{$product->naam}}</p>
                                </div>
                                <div class="mb-2">
                                    <form action="/deleteVerpakkingInhoud" method="post" class="d-inline-block">
                                        @csrf
                                        <input name="product_id" value="{{$product->id}}" type="hidden">
                                        <input name="selectie_id" value="{{$selectie->id}}" type="hidden">
                                        <x-submit class="smallest-button submit-button-margin">
                                            <i class="fa-solid fa-trash-can smallest-trash"></i>
                                        </x-submit>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>Je hebt nog geen producten toegevoegd.</p>
                @endif
            </x-cardstripe>
        </div>
    </div>
</x-layout>
