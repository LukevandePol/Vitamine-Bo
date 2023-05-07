<x-layout :title="'- Account'">

    <a href="/">home</a>

    <form action="/updateEmail" method="POST">
        @csrf

        <x-input label="E-mailadres:" type="email" name="email"/>

        <x-submit>pas aan</x-submit>
    </form>

    <form action="/updateNaam" method="post">
        @csrf

        <x-input label="Naam" type="text" name="naam"></x-input>
        <x-submit>pas aan</x-submit>
    </form>

</x-layout>
