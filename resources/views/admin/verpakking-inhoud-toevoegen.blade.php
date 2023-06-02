<x-layout title="Inhoud toevoegen">
    <form action="/verpakkingInhoudToevoegen" method="post">
        @csrf
        <x-input type="hidden" name="selectie_id" value="{{$selectie_id}}"/>
        <x-input name="product_id" value="5"/>
        <x-input name="aantal" label="aantal"/>
        <x-submit>toevoegen</x-submit>
    </form>
</x-layout>

