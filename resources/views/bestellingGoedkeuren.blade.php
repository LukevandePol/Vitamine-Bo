<x-layout
    title="Bestelling goedkeuren"
    header="Bestelling goedkeuren"
    beschrijving="Hier kun je de aanpassingen van klanten controleren.">

    @foreach($aangepasteBestellingen as $bestelling)
        <div style="border: 1px solid red">
            {{$bestelling}}
        </div>
    @endforeach
</x-layout>
