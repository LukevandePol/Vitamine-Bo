@props(['icon'])

<button {{ $attributes->merge(['class' => 'icon-button']) }}>
  <span class="icon">
    <i class="fas {{ $icon ?? 'fa-edit' }}"></i>
  </span>
    <span class="text text-color">{{ $slot }}</span>
</button>
