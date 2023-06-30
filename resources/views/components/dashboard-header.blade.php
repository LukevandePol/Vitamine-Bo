@props(['beschrijving'])

<div class="welkom-banner">
    <div class="container padding-left">
        <h1 class="welkom-header">
            {{ $slot }}
        </h1>
        @isset($beschrijving)
            <p class="mt-3 text-white mb-0">{{ $beschrijving }}</p>
        @endisset
    </div>
</div>
