<x-layout title="fruit toevoegen">
    <form action="/fruitToevoegen" method="post">
        @csrf
        <x-input name="naam" label="Naam"/>
        <x-input name="afbeelding" label="afbeelding" type="file" accept=".jpg .jpeg .png"/>
        <x-submit>Toevoegen</x-submit>
    </form>
</x-layout>
