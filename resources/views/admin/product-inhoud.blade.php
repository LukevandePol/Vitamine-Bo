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
                            <input name="selectie_id" value="{{$selectie[0]->id}}" type="hidden">
                            <x-submit>Verwijder</x-submit>
                        </form>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    @foreach(\App\Models\Product::all()->where('type', '=', 'fruit') as $product)
        <form action="/verpakkingInhoudToevoegen" method="post">
            @csrf
            <x-input type="hidden" name="selectie_id" value="{{$selectie[0]->id}}"/>
            <x-input type="hidden" name="product_id" value="{{$product->id}}"/>
            <p>{{$product->naam}}</p>
            <x-input name="aantal" label="aantal"/>
            <x-submit>toevoegen</x-submit>
        </form>
    @endforeach
</x-layout>
