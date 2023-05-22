<x-layout title="Dashboard" header="Welkom {{ $user->name}}">
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
                    <p class="m-0">Naam: {{$user->name}}</p>
                    <p class="m-0">Email: {{$user->email}}</p>
                    <p class="m-0">Postcode: {{$adres->postcode}}</p>
                    <p class="m-0">Huisnummer: {{$adres->huisnummer}}</p>

                </x-cardstripe>
                <x-a href="/account">Beheer je gegevens</x-a>

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h2>Geef je werknemers een boost</h2>
                <p> Voeg ook onze heerlijke pakketten toe</p>
                <x-carousel/>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <x-card>
                    <h2>Recente bestellingen</h2>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Bezorgdatum</th>
                            <th scope="col">Bezorgadres</th>
                            <th scope="col">Prijs</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>13-4-2023</td>
                            <td>wegisweg 12</td>
                            <td>€130,67</td>
                            <td>Afgerond</td>
                        </tr>
                        <tr>
                            <td>6-4-2023</td>
                            <td>wegisweg 12</td>
                            <td>€130,67</td>
                            <td>Afgerond</td>
                        </tr>
                        </tbody>
                    </table>
                </x-card>
            </div>
            <x-a href="#">Bekijk al je bestellingen</x-a>
        </div>
    </div>
</x-layout>
