@props(['product'])

<div class="modal fade" id="{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 text-center d-flex align-items-center">
                            <img src="{{$product->afbeelding_pad}}"
                                 class="product-image custom-margin1"
                                 alt="{{$product->naam}}"
                            >
                        </div>

                        <div class="col-md-6">
                            <h3 class="bo-hoofdkleur">{{$product->naam}}</h3>

                            <p>Dit is de standaard inhoud van het krat,
                                voeg deze toe aan je bestelling of
                                personaliseer de inhoud.
                            </p>
                            <p></p>
                            @if($inhoud !== null and $producten !== null)
                                <ul class="custom-ul stripe-top">
                                    @foreach($producten as $product)
                                        <li>
                                            <span class="list-text">{{$product->naam}}</span>
                                            <div class="wrapper">
                                                <span class="num2">{{$inhoud[$loop->index]->aantal}}</span>
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
                    <x-buttonicon class="modal-trigger me-2" data-bs-toggle="modal" data-bs-target="#personalizeModal">
                        Personaliseer
                    </x-buttonicon>
                    <x-buttonicon class="ml-2" data-bs-dismiss="modal" aria-label="Close">
                        Toevoegen
                    </x-buttonicon>
                </div>
            </div>

        </div>
    </div>
</div>

{{--<x-personalize/>--}}
