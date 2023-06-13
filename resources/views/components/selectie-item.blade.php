<div class="col-lg-3 col-md-4 col-sm-6 my-2">
    <img src="{{$verpakkingsProduct->afbeelding_pad}}"
         alt="{{$verpakkingsProduct->naam}}"
         class="img-fluid shadowimg modal-trigger"
         data-bs-toggle="modal"
         data-bs-target="#selectie{{$selectie->id}}">

    <x-selectie-popup :selectie="$selectie"/>
</div>

