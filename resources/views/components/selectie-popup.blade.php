<div class="modal fade" id="selectie{{$selectie->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                            <p></p>
                            @if(isset($inhoud))
                                <ul class="custom-ul stripe-top">
                                    @foreach($inhoud as $i)
                                        <li>
                                            <span class="list-text">{{$i['naam']}}</span>
                                            <div class="wrapper">
                                                <span class="num2">{{$i['aantal']}}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="d-flex">
                    <x-buttonicon class="modal-trigger me-2" data-bs-toggle="modal"
                                  data-bs-target="#personalizeModal">
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

{{--<x-personalize/>--}}
