<div class="modal fade" id="schaalModal" tabindex="-1" aria-labelledby="schaalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 text-center d-flex align-items-center">
                            <img src="images/fruitschaalbo.png" class="product-image custom-margin1" alt="product">
                        </div>
                        <div class="col-md-6">
                            <h3 class="bo-hoofdkleur">1x Schaal (43 stuks)</h3>

                            <p>Dit is de standaard inhoud van het schaal, voeg deze toe aan je bestelling of personaliseer het.</p>
                                <ul class="custom-ul stripe-top">
                                    <li>
                                        <span class="list-text">Appel</span>
                                        <div class="wrapper">
                                            <span class="num2">8</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Peer</span>
                                        <div class="wrapper">
                                            <span class="num2">8</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Banaan</span>
                                        <div class="wrapper">
                                            <span class="num2">8</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Kiwi</span>
                                        <div class="wrapper">
                                            <span class="num2">8</span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="list-text">Sinaasappel</span>
                                        <div class="wrapper">
                                            <span class="num2">8</span>
                                        </div>
                                    </li>
                                </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex">
                    <x-buttonicon class="modal-trigger me-2" data-bs-toggle="modal" data-bs-target="#personalizeschaalModal">
                        <i class="fa-close"></i>
                        Personaliseer
                    </x-buttonicon>
                    <x-buttonicon class="ml-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-plus"></i>
                        Toevoegen
                    </x-buttonicon>
                </div>
            </div>
        </div>
    </div>
</div>

@section('page-scripts')
    @vite(['resources/js/teller.js'])
@endsection
