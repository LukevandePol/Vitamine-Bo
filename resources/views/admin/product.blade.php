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
        <div class="filter-wrapper">
            <label for="product-type">Filter artikelen:</label>
            <select id="product-type">
                <option value="">Alles</option>
                <option value="fruit">Fruit</option>
                <option value="groente">Groente</option>
                <option value="fles">Fles</option>
                <option value="verpakking">Verpakking</option>
            </select>
        </div>

        <table class="table table-striped" id="product-table">
            <thead>
            <tr>
                <th scope="col">Naam</th>
                <th scope="col">Type</th>
                <th scope="col">Inhoud</th>
                <th scope="col">Zichtbaar op website</th>
                <th scope="col">Actie</th>
            </tr>
            </thead>
            <tbody id="product-table-body">
            @foreach($products as $product)
                <tr data-type="{{ $product->type }}">
                    <td>{{ $product->naam }}</td>
                    <td>{{ $product->type }}</td>
                    <td>{{ $product->inhoud ? : 'n.v.t.' }}</td>
                    <td>
                        <div class="checkbox-cell">
                            <form action="" method="post">
                                <input type="checkbox" name="zichtbaar_op_website" value="{{ $product->id }}"
                                       class="bigger-checkbox">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="mt-2">
            <div class="row">
                <div class="page-container">
                    <div class="rowIndication" id="rowIndication"></div>
                    <ul class="pagination" id="pagination-container"></ul>
                </div>
            </div>
        </div>
    </x-card>

    @section('page-scripts')
        @vite(['resources/js/tablefilter.js'])
    @endsection
</x-layout>
