<x-layout title="fles toevoegen">
    <form action="/flesToevoegen" method="post">
        @csrf
        <x-input name="naam" label="Naam + Smaak"/>
        <x-input name="inhoud" label="Inhoud"/>
        <x-input name="afbeelding" label="afbeelding" type="file" accept=".jpg .jpeg .png"/>
        <x-submit>Toevoegen</x-submit>
    </form>
</x-layout>
