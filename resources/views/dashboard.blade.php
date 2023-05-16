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
                <x-cardstripe
                    title="Aankomende Levering">
                    hallo
                </x-cardstripe>

                <x-a href="#">Bekijk je leveringen</x-a>
            </div>
            <div class="col-sm-6">
                <x-cardstripe
                    title="Goedkeuring aanpassing">
                    <i class="fa-solid fa-clock" style="color: #63beeb;"></i>
                    Uw aanpassing is in behandeling
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

                <x-cardstripe
                    title="Gegevens">
                    <p>Naam: henk viergever</p>
                    <p>Email: info@bedrijf.com</p>
                    <p>Postcode: 9212 je grongingen</p>
                    <p>Adres: jeverweg 12</p>
                </x-cardstripe>
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
