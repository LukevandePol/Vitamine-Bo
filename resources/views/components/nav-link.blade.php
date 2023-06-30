@props(['active', 'icon'])

@php
    $classes = ($active ?? false)
                ? 'active'
                : 'nav-link';
@endphp

<li>
    <a {{ $attributes->merge(['class' => $classes]) }}>
        <i class="fa-solid {{ $icon ?? 'fa-home' }}"></i>
        <span class="nav-link">
            {{ $slot }}
        </span>
    </a>
</li>
