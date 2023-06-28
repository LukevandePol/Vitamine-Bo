<x-layout
    title="Bestelling goedkeuren"
    header="Bestelling goedkeuren"
    beschrijving="Hier kun je de aanpassingen van klanten controleren.">

    <x-cardstripe title="Klanten met aanpassingen" class="bg-white">

        <table class="table table-striped" id="product-table">
            <thead>
            <tr>
                <th scope="col">Naam</th>
                <th scope="col">Email</th>
                <th scope="col">Actie</th>
            </tr>
            </thead>
            <tbody id="product-table-body">
            @foreach($aangepasteBestellingen as $bestelling)
                <tr>
                    <td>{{\App\Models\User::find($bestelling->user_id)->name}}</td>
                    <td>{{\App\Models\User::find($bestelling->user_id)->email}}</td>
                    <td>
                        <x-a href="BestellingBekijken/{{$bestelling->id}}" class="mt-0">Bekijk</x-a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </x-cardstripe>
</x-layout>
