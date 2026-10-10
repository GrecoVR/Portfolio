<div>
    <label for="{{ $name }}">{{ $label }}:</label>
    <input 
        type="{{ $type }}" 
        id="{{ $name }}" 
        name="{{ $name }}" 
        value="{{ old($name) }}"
        {{ $attributes }}
    >
    @error($name)
        <div>{{ $message }}</div>
    @enderror
</div>