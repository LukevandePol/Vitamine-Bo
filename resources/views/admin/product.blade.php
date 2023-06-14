    <x-layout title="Product" header="Producten" beschrijving="Voeg hier nieuwe producten toe of verwijder ze.">
        <x-card class="mt-3">
        <form method="POST" action="/admin/product">
            @csrf
            <div class="product-group">
                <div class="label-wrapper">
                    <label for="type">Voeg een nieuw product toe</label>
                </div>
                <div class="select-wrapper">
                    <select name="type" id="type">
                        <option value="">--Kies een optie--</option>
                        <option value="fruit">Fruit</option>
                        <option value="groente">Groente</option>
                        <option value="fles">Fles</option>
                        <option value="verpakking">Verpakking</option>
                    </select>
                </div>
                <div class="button-wrapper">
                    <x-submit>Toevoegen</x-submit>
                </div>
            </div>
        </form>
    </x-card>

    <x-card class="mt-5">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Naam</th>
                <th scope="col">Type</th>
                <th scope="col">Inhoud</th>
                <th scope="col">Actie</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->naam }}</td>
                    <td>{{ $product->type }}</td>
                    <td>{{ $product->inhoud }}</td>
                    @if($product->type == 'verpakking')
                        <td>
                            <x-a href="/admin/productInhoudBewerken/{{$product->id}}">bewerken</x-a>
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </x-card>

</x-layout>
