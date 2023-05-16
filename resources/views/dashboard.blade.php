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
                <x-a href="#">Bekijk je leveringen</x-a>
            </div>
            <div class="col-sm-6">
                <x-card>
                    goed keuring aanpassing
                </x-card>
                <x-a href="#">Bekijk je levering</x-a>

                <x-card>
                    facturen
                </x-card>
                <x-a href="#">Bekijk je facturen</x-a>

                <x-card>
                    gegevens
                </x-card>
                <x-a href="#">Beheer je gegevens</x-a>

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
            <x-a href="#">Bekijk al je bestellingen</x-a>
        </div>
    </div>
</x-layout>
