<x-layout title="Inhoud toevoegen">
    <div class="row">
        <div class="col-12">
            @if($inhoud !== null)
                @foreach($inhoud as $item)
                    <div style="border: 1px solid red">
                        @php $product = \App\Models\Product::find($item->product_id)@endphp
                        <p>{{$item->aantal}}</p>
                        <p>{{$product->naam}}</p>
                        <form action="/deleteVerpakkingInhoud" method="post">
                            @csrf
                            <input name="product_id" value="{{$product->id}}" type="hidden">
                            <input name="selectie_id" value="{{$selectie->id}}" type="hidden">
                            <x-submit>Verwijder</x-submit>
                        </form>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <div class="card-containerproduc">
        @foreach(\App\Models\Product::all()->where('type', '=', 'fruit') as $product)
            <div class="mb-3">
                <x-cardstripe :title="$product->naam" class="font-stylecard">
                    <form action="/verpakkingInhoudToevoegen" method="post">
                        @csrf
                        <x-input type="hidden" name="selectie_id" :value="$selectie->id" />
                        <x-input type="hidden" name="product_id" :value="$product->id" />
                        <div class="form-length">
                            <x-input name="aantal" label="aantal" />
                        </div>
                        <x-submit class="small-button">Toevoegen</x-submit>
                    </form>
                </x-cardstripe>
            </div>
        @endforeach
    </div>



</x-layout>
