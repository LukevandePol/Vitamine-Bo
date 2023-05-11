@props(['id'])

<div role="tabpanel" id="{{ $id }}" {{ $attributes->merge(['class' => 'tabpanel']) }}>
    {{ $slot }}
</div>
