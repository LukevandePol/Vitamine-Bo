@props(['active', 'icon'])

@php
    $classes = ($active ?? false)
                ? 'active'
                : 'nav-link';
@endphp

<li>
    <a {{ $attributes->merge(['class' => $classes]) }}>
        <i class="fa-solid {{ $icon ?? 'fa-home' }}"></i>
        <span class="links_name">
            {{ $slot }}
        </span>
    </a>
</li>
