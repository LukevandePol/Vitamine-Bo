<x-layout title="verpakking toevoegen">
    <form action="/verpakkingToevoegen" method="post">
        @csrf
        <x-input name="naam" label="Naam"/>
        <x-input name="afbeelding" label="afbeelding" type="file" accept=".jpg .jpeg .png"/>
        naiklfjij
        <x-submit>Toevoegen</x-submit>
    </form>
</x-layout>
