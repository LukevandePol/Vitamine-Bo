<x-layout title="Dashboard" header="Welkom {{ $user->name }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Dashboard</h2>
                <p>Hier zie je een overzicht van relevante informatie.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                @if($bestelling !== null)
                    <x-cardstripe
                        title="Aankomende Levering"
                        class="bo-hoofdkleur-opacity">
                        @foreach($bestelling->selecties as $selectie)
                            <div class="margin-total-list">
                                <div class="item-row">
                                    <h5>1x {{\App\Models\Product::find($selectie->product_id)->naam}}</h5>
                                </div>
                            </div>
                            @if($selectie->products !== null)
                                <ul class="margin-ul-items">
                                    @foreach($selectie->products as $product)
                                        <li>
                                            <div class="item-name">
                                                {{$product->naam}}
                                            </div>
                                            <div class="item-number-top">
                                                {{\Illuminate\Support\Facades\DB::table('product_selectie')
                                                    ->where('product_id', $product->id)
                                                    ->where('selectie_id', $selectie->id)
                                                    ->get()[0]->aantal
                                                }}
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @endforeach
                    </x-cardstripe>
                @else
                    <x-cardstripe
                        title="Nieuwe bestelling"
                        class="bo-hoofdkleur-opacity"
                    >
                        <p>U heeft nog geen bestelling.</p>
                        <p>
                            <x-a href="BestellingAanpassen"> Hier om een bestelling te maken</x-a>
                        </p>
                    </x-cardstripe>
                @endif
                <x-a href="BestellingAanpassen">Bekijk je Bestelling</x-a>
            </div>

            <div class="col-sm-6">
                <x-cardstripe title="Goedkeuring aanpassing" class="bg-white custom-cardstripe">
                    <x-status-goedkeuring></x-status-goedkeuring>
                </x-cardstripe>
                <x-a href="#">Bekijk je levering</x-a>

                <x-cardstripe
                    title="Facturen" class="bg-white">
                    <table class="table no-padding-table">
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

                <x-cardstripe title="Gegevens" class="bg-white">
                    <div class="cardstripe-content">
                        <div>
                            <p class="m-0">Naam: {{ auth()->user()->name }}</p>
                            <p class="m-0">Email: {{ auth()->user()->email }}</p>
                            <p class="m-0">Postcode: {{ $bezorgadres->weergavenaam }}</p>
                            <p class="m-0">Huisnummer: {{ $bezorgadres->huisnummer }}</p>
                        </div>
                        <div class="placement-user">
                            <i class="fa-solid fa-user user-icon"></i>
                        </div>
                    </div>
                </x-cardstripe>
                <x-a href="/account">Beheer je gegevens</x-a>

            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <h2 class="carousel-text">Geef je werknemers een boost</h2>
                <p class="carousel-text"> Voeg ook onze heerlijke pakketten toe</p>
                <x-carousel/>
            </div>
        </div>

        <div class="row mt-5">
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
