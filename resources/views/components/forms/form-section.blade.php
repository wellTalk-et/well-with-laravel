@props([
    'name', 
    'label', 
    'title', 
    'id', 
    'class', 
    'error', 
    'pattern', 
    'type' => "text",
    'required' => false, 
    'placeholder' => 'placeholder', 
])

<div class="form-with-desc">
    <label for="{{ $name }}">{{ $slot }}</label>
    
    <input 
        type="{{ $type }}" 
        placeholder="{{ $placeholder }}" 
        class="{{ $class }}" 
        name="{{ $name }}" 
        id="{{ $id }}" 
        pattern="{{ $pattern }}" 
        title="{{ $title }}" 
        value = "{{old($name)}}"
        {{ $required ? 'required' : '' }}
    />

    @error($name)
    <span id="js-{{ $name }}-error" class="error">{{ $message }}</span>
    @enderror
</div>
