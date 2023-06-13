<x-layout title="Product" header="Producten" beschrijving="Voeg hier nieuwe producten toe of verwijder ze.">
    <x-card>
        <table class="table table-striped mt-5">
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

    <x-card class="mt-5">
        <form method="POST" action="/admin/product">
            @csrf
            <label for="type">Kies het type product</label>
            <select name="type" id="type">
                <option value="">--Please choose an option--</option>
                <option value="fruit">Fruit</option>
                <option value="groente">Groente</option>
                <option value="fles">Fles</option>
                <option value="verpakking">Verpakking</option>
            </select>
            <x-submit>Toevoegen</x-submit>
        </form>
    </x-card>
</x-layout>
