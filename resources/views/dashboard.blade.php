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
                <x-a href="#" tekst="Bekijk je levering"/>

                <x-card>
                    facturen
                </x-card>
                <x-a href="#" tekst="Bekijk je facturen"/>

                <x-card>
                    gegevens
                </x-card>
                <x-a href="#" tekst="Beheer je gegevens"/>

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
