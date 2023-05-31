@props(['product'])

<div class="col-lg-3 col-md-4 col-sm-6 my-2">
    <img src="{{$product->afbeelding_pad}}"
         alt="{{$product->naam}}"
         class="img-fluid shadowimg modal-trigger"
         data-bs-toggle="modal"
         data-bs-target="#{{$product->id}}">

    <x-productpopup :product="$product"/>
    {{--    <x-personalize/>--}}
</div>

