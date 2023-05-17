<x-layout title="Dashboard" header="Welkom {{ auth()->user()->name }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Dashboard</h2>
                <p>Hier zie je een overzicht van relevante informatie.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <x-cardstripe
                    title="Aankomende Levering">
                    hallo
                </x-cardstripe>
                <x-a href="#">Bekijk je leveringen</x-a>
            </div>

            <div class="col-sm-6">
                <x-cardstripe title="Goedkeuring aanpassing">
                    <x-status-goedkeuring></x-status-goedkeuring>
                </x-cardstripe>
                <x-a href="#">Bekijk je levering</x-a>

                <x-cardstripe
                    title="Facturen">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Maand: april</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>€130,67</td>
                            <td>Afgerond</td>
                        </tr>
                        </tbody>
                    </table>
                </x-cardstripe>
                <x-a href="#">Bekijk je facturen</x-a>

                <x-cardstripe title="Gegevens">
                    <p>
                        {{$user->name}} <br>
                        {{$user->email}} <br><br>
                        {{$bezorgAdres->adres}} <br>
                        {{$bezorgAdres->postcode}} {{$bezorgAdres->plaatsnaam}}
                    </p>
                </x-cardstripe>
                <x-a href="/account">Beheer je gegevens</x-a>

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h2>Geef je werknemers een boost</h2>
                <p> Voeg ook onze heerlijke pakketten toe</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h2>Recente bestellingen</h2>
            </div>
            <x-a href="#">Bekijk al je bestellingen</x-a>
        </div>
    </div>
</x-layout>
