<button {{ $attributes->merge(['class' => 'icon-button']) }}>
  <span class="icon">
    <i class="far {{ $icon ?? 'fa-edit' }}"></i>
  </span>
    <span class="text text-color">Aanpassen</span>
</button>
