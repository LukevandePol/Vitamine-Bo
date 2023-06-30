@props(['class' => 'btn btn-primary button-submit'])

<button {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</button>

