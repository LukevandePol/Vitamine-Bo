<x-layout title="Product Bewerken">
    <form action="" method="post">
        @csrf
        @if($product->type == 'fles')
            <x-input name="naam" label="Naam + Smaak"/>
            <x-input name="inhoud" label="Inhoud"/>
        @else
            <x-input
                name="naam"
                label="Naam"
                value="{{$product->naam}}"
            />
        @endif

        <x-input
            name="afbeelding"
            label="afbeelding"
            type="file"
            accept=".jpg .jpeg .png"
        />
    </form>

    @if($product->type == 'verpakking')
        <x-a href="inhoud bewerken">inhoud bewerken</x-a>
    @endif
</x-layout>
