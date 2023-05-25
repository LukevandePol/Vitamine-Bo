<x-layout title="Product" header="Producten" beschrijving="Voeg hier nieuwe producten toe of verwijder ze.">
    <x-card>
        <table class="table table-striped mt-5">
            <thead>
            <tr>
                <th scope="col">Naam</th>
                <th scope="col">Inhoud</th>
                <th scope="col">Smaak</th>
                <th scope="col">Volume</th>
                <th scope="col">Acties</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->naam }}</td>
                    <td>{{ $product->inhoud }}</td>
                    <td>{{ $product->smaak }}</td>
                    <td>{{ $product->volume }}</td>
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
            <x-input label="Volume:" name="volume"/>

            <x-submit>Aanmaken</x-submit>
        </form>
    </x-card>
</x-layout>
