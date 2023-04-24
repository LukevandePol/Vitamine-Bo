@props(['label', 'type' => 'text', 'name'])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control" id="{{ $name }}">

    @error('{{ $name }}')
        <p>{{ $message }}</p>
    @enderror
</div>
