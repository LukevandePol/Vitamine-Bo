@props(['title'])

<div {{ $attributes->merge(['class' => 'card-custom']) }}>
    <h2 class="card-title">
        {{$title}}
    </h2>
    <div style="border-bottom: 3px solid #B2DFF5; padding-bottom: 7px;"></div>
    <p class="card-text">
        {{$slot}}
    </p>
</div>
