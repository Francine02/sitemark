@props([
    'label' => 'Bio',
    'type' => 'text',
    'placeholder' => 'Digite sua bio',
    'name' => 'bio',
])

@php
    $hasError = $errors->has($name);
@endphp

<div>
    <label class="paragraph-medium block mt-5 mb-2">
        {{ $label }}
        <textarea rows="5" name="{{ $name }}" value="{{ old($name) }}" type="{{ $type }}"
            placeholder="{{ $placeholder }}" @class([
                'bg-background-secondary w-full p-3 rounded-xl outline-0 hover:bg-background-tertiary/60 placeholder:text-content-tertiary mt-1 min-h-24 max-h-40',
                'border-accent-red border' => $hasError,
            ])></textarea>
    </label>

    @if ($errors->has($name))
        <x-warning-message variant='error'>
            {{ $errors->first($name) }}
        </x-warning-message>
    @endif
</div>
