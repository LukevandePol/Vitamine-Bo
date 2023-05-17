@props(['beschrijving'])

<div class="row mb-5">
    <div class="col-12">
        <div class="welkom-banner">
            <div class="container">
                <h1 class="welkom-header">
                    {{ $slot }}
                </h1>
                @isset($beschrijving)
                    <p class="mt-3 text-white mb-0">{{ $beschrijving }}</p>
                @endisset
            </div>
        </div>
    </div>
</div>
