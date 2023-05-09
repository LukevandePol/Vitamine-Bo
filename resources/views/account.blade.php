<x-layout :title="'- Account'">

    <a href="/">home</a>

    <p>{{$user}}</p>
    <form action="/updateUser" method="POST">
        @csrf
        <x-input label="E-mailadres:" type="email" name="email" :placeholder="$user->email"/>
        <x-input label="Naam" type="text" name="naam" :placeholder="$user->name"/>
        <x-submit>pas aan</x-submit>
    </form>

    <form action="/updateTelefoon" method="post">
        @csrf

        <x-input label="Telefoonnummer" type="text" name="telefoonnummer"></x-input>
        <x-submit>pas aan</x-submit>
    </form>

</x-layout>
