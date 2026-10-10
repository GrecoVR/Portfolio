<div>
    <label for="{{ $name }}">{{ $label }}</label>

    <textarea
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $attributes }}
        >{{ old($name) }}
    </textarea>

    @error($name)
        <p class="error">{{ $message }}</p>
    @enderror
</div>