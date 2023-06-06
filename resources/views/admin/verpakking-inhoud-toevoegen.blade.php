<x-layout title="Inhoud toevoegen">
    <div class="row">
        <div class="col-12">
            {{--            @foreach(Product)--}}

            {{--            @endforeach--}}
        </div>
    </div>

    @foreach(\App\Models\Product::all()->where('type', '=', 'fruit') as $product)
        <form action="/verpakkingInhoudToevoegen" method="post">
            @csrf
            <x-input type="hidden" name="selectie_id" value="{{$selectie_id}}"/>
            <x-input type="hidden" name="product_id" value="{{$product->id}}"/>
            <p>{{$product->naam}}</p>
            <x-input name="aantal" label="aantal"/>
            <x-submit>toevoegen</x-submit>
        </form>
    @endforeach
</x-layout>
