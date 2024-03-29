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

            <form action="/speciaalToevoegenAanBestelling" method="post">
                @csrf
                <input type="hidden" name="selectie_id" value="{{$selectie->id}}">

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
                                <p class="no-bottom-margin">
                                    <strong>! Let op !</strong>
                                </p>
                                <p>Het aanpassen van de inhoud kan invloed hebben op de prijs en moet daarom een
                                    goedkeuring
                                    krijgen van Vitamine Bo.
                                </p>
                                {{--                            <div class="personalize-row mb-2">--}}
                                {{--                                <p class="personalize-text">Personaliseer hier uw schaal:</p>--}}
                                {{--                                <p class="totaal-counter">Totaal: <span id="total-counter"> 0 / 43</span></p>--}}
                                {{--                            </div>--}}

                                <div class="scrollable-container2">
                                    <ul class="custom-ul stripe-top">
                                        @foreach($beschikbaarFruitEnGroenten as $fruitOfGroente)
                                            <li>
                                                <span class="list-text">{{$fruitOfGroente->naam}}</span>
                                                <div class="teller">
                                                    <span class="minus">-</span>
                                                    <span class="num">0</span>
                                                    <span class="plus">+</span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="d-flex">
                        {{--                    <x-buttonicon class="modal-trigger me-2" data-bs-toggle="modal" data-bs-target="#schaalModal" icon="fa-close">--}}
                        {{--                        Annuleren--}}
                        {{--                    </x-buttonicon>--}}
                        <x-buttonicon class="ml-2" data-bs-dismiss="modal" aria-label="Close" icon="fa-plus">
                            Wijziging toevoegen
                        </x-buttonicon>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>

@section('page-scripts')
    @vite(['resources/js/teller.js'])
@endsection

