@props(['label', 'type' => 'text', 'name', 'placeholder', 'value'])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}"
           class="form-control"
           name="{{ $name }}"
           id="{{ $name }}"
           @isset($placeholder)
               placeholder="{{ $placeholder }}"
           @endisset
           @isset($value)
               value="{{$value}}"
        @endisset
    >

    @error('{{ $name }}')
    <p>{{ $message }}</p>
    @enderror
</div>
