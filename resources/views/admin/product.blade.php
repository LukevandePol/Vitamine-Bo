<x-layout title="Product" header="Producten" beschrijving="Voeg hier nieuwe producten toe of verwijder ze.">
    <x-card>
        <table class="table table-striped mt-5">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Naam</th>
                <th scope="col">Type</th>
                <th scope="col">Inhoud</th>
                <th scope="col">Afbeelding</th>
                <th scope="col">Actie</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->naam }}</td>
                    <td>{{ $product->type }}</td>
                    <td>{{ $product->inhoud }}</td>
                    <td>{{ $product->afbeelding }}</td>
                    <td>Buttons</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </x-card>

    <x-card class="mt-5">
        <form method="POST" action="/admin/product">
            @csrf

            <x-input label="Naam:" name="naam"/>
            <x-input label="Smaak:" name="smaak"/>
            <x-input label="Type:" name="type"/>
            <x-input label="Inhoud:" name="inhoud"/>

            <x-submit>Aanmaken</x-submit>
        </form>
    </x-card>
</x-layout>
