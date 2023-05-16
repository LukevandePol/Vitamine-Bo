<x-layout title="- Dashboard">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="welkom-banner padding-left">
                    <h1 class="welkom-header">Welkom Bam</h1>
                </div>
            </div>
        </div>

        <div class="row padding-left">
            <div class="col-12">
                <h2>Dashboard</h2>
                <p>Hier zie je een overzicht van relevante informatie.</p>
            </div>
        </div>

        <div class="row padding-left">
            <div class="col-sm-6">
                <x-card>
                    aankomende levering
                </x-card>
                <x-a href="#" tekst="Bekijk je leveringen"/>
            </div>
            <div class="col-sm-6">
                <x-card>
                    goed keuring aanpassing
                </x-card>
                <a href="#">Bekijk je levering</a>

                <x-card>
                    facturen
                </x-card>
                <a href="#">Bekijk je facturen</a>

                <x-card>
                    gegevens
                </x-card>
                <a href="#">Beheer je gegevens</a>

            </div>
        </div>

        <div class="row padding-left">
            <div class="col-12">
                <h2>Geef je werknemers een boost</h2>
                <p> Voeg ook onze heerlijke pakketen toe</p>
            </div>
        </div>

        <div class="row padding-left">
            <div class="col-12">
                <h2>Recente bestellingen</h2>
            </div>
            <x-a href="#" tekst="Bekijk al je bestellingen"/>
        </div>
    </div>
</x-layout>
