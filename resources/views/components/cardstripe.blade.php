@props(['title'])

<div {{ $attributes->merge(['class' => 'card-custom']) }}>
    <h5 class="card-title">
        {{$title}}
    </h5>
    <div style="border-bottom: 3px solid #B2DFF5; padding-bottom: 7px;"></div>
    <p class="card-text">
        {{$slot}}
    </p>
</div>
