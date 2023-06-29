{{--Vierkantje met foto--}}
<div class="col-lg-3 col-md-4 col-sm-6 my-2">
    <img src="{{$verpakkingsProduct->afbeelding_pad}}"
         alt="{{$verpakkingsProduct->naam}}"
         class="img-fluid shadowimg modal-trigger"
         data-bs-toggle="modal"
         data-bs-target="#selectie{{$selectie->id}}">
</div>

{{--Modal voor standaard--}}
<div class="modal fade"
     id="selectie{{$selectie->id}}"
     tabindex="-1"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 text-center d-flex align-items-center">
                            <img src="{{$verpakkingsProduct->afbeelding_pad}}"
                                 class="product-image custom-margin1"
                                 alt="{{$verpakkingsProduct->naam}}"
                            >
                        </div>

                        <div class="col-md-6">
                            <h3 class="bo-hoofdkleur">{{$verpakkingsProduct->naam}}</h3>
                            <p>Dit is de standaard inhoud van het krat,
                                voeg deze toe aan je bestelling of
                                personaliseer de inhoud.
                            </p>
                            <ul class="custom-ul stripe-top">
                                @foreach($inhoud as $i)
                                    <li>
                                        <span
                                            class="list-text">{{\App\Models\Product::find($i->product_id)->naam}}</span>
                                        <div class="wrapper">
                                            <span class="num2">{{$i->aantal}}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="d-flex">
                    <x-buttonicon class="modal-trigger me-2"
                                  data-bs-toggle="modal"
                                  data-bs-target="#personalizeModal{{$selectie->id}}">
                        Personaliseer
                    </x-buttonicon>
                    <form action="/toevoegenAanBestelling/" method="post">
                        @csrf
                        <input
                            name="selectie_id"
                            type="hidden"
                            value="{{$selectie->id}}"
                        >
                        <x-buttonicon class="ml-2" data-bs-dismiss="modal" aria-label="Close">
                            Toevoegen
                        </x-buttonicon>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

{{--Modal voor personaliseer--}}
<div class="modal fade" id="personalizeModal{{$selectie->id}}" tabindex="-1" aria-labelledby="personalizeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 text-center d-flex align-items-center">
                            <div class="col-md-6 text-center d-flex align-items-center">
                                <img src="{{$verpakkingsProduct->afbeelding_pad}}"
                                     class="product-image custom-margin1"
                                     alt="{{$verpakkingsProduct->naam}}"
                                >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="bo-hoofdkleur">1x {{$verpakkingsProduct->naam}}</h3>
                            <p class="no-bottom-margin"><strong>Let op!</strong></p>
                            <p>Het aanpassen van de inhoud kan invloed hebben op de prijs en moet daarom een goedkeuring
                                krijgen van Vitamine Bo.</p>
                            <div class="personalize-row mb-2">
                                <p class="personalize-text">Personaliseer hier uw schaal:</p>
                                <p class="totaal-counter">Totaal: <span id="total-counter"> 0 / 43</span></p>
                            </div>

                            <div class="scrollable-container2">
                                <ul class="custom-ul stripe-top">
                                    <li>
                                        <span class="list-text">Appel</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Peer</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Banaan</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Sinaasappel</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Kiwi</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Avocado</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Gember</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Mandarijn</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Citroen</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Druiven</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Tomaat</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Komkommer</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Paprika</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                    <li>
                                        <p class="no-bottom-margin fw-bold">Seizoensfruit</p>
                                    </li>
                                    <li>
                                        <span class="list-text">Perzik</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Kaki</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Blauwe Bes</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Radijs</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Pruim</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Braam</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Nectarine</span>
                                        <div class="teller">
                                            <span class="minus">-</span>
                                            <span class="num">0</span>
                                            <span class="plus">+</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="d-flex">
                    <x-buttonicon class="modal-trigger me-2" data-bs-toggle="modal" data-bs-target="#schaalModal">
                        <i class="fa-close"></i>
                        Annuleren
                    </x-buttonicon>
                    <x-buttonicon class="ml-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-plus"></i>
                        Wijziging toevoegen
                    </x-buttonicon>
                </div>
            </div>

        </div>
    </div>
</div>


@section('page-scripts')
    @vite(['resources/js/teller.js'])
@endsection

