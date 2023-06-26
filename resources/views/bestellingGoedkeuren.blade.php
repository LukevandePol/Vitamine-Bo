<x-layout
    title="Bestelling goedkeuren"
    header="Bestelling goedkeuren"
    beschrijving="Hier kun je de aanpassingen van klanten controleren.">

    @foreach($aangepasteBestellingen as $bestelling)
        <div style="border: 1px solid red" class="mb-3">
            {{$bestelling}}
        </div>
    @endforeach
</x-layout>
