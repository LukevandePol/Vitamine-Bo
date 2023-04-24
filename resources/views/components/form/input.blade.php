@props(['label', 'type' => 'text', 'name', 'placeholder'])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control" name="{{ $name }}" id="{{ $name }}" @isset($placeholder) placeholder="{{ $placeholder }}" @endisset>

    @error('{{ $name }}')
        <p>{{ $message }}</p>
    @enderror
</div>
