<x-mail::layout>
    {{-- Header --}}
    <x-slot:header>
        <x-mail::header :url="config('app.url')">
            <img src="https://vitaminebo.nl/wp-content/uploads/vitamine-bo-logo-300x267.png" class="logo"
                 alt="Vitamine Bo logo">
        </x-mail::header>
    </x-slot:header>

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        <x-slot:subcopy>
            <x-mail::subcopy>
                {{ $subcopy }}
            </x-mail::subcopy>
        </x-slot:subcopy>
    @endisset

    {{-- Footer --}}
    <x-slot:footer>
        <x-mail::footer>
            © {{ date('Y') }} Vitamine Bo. @lang('Alle rechten voorbehouden')
        </x-mail::footer>
    </x-slot:footer>
</x-mail::layout>
