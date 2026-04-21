@props([
    'label' => 'E-mail',
    'type' => 'text',
    'placeholder' => 'Digite seu e-mail',
    'name' => 'email',
])

@php
    $hasError = $errors->has($name);
@endphp

<div>
    <label class="paragraph-medium block mt-5 mb-2">
        {{ $label }}
        <input name="{{ $name }}" value="{{ old($name) }}" type="{{ $type }}"
            placeholder="{{ $placeholder }}" @class([
                'bg-background-secondary w-full p-3 rounded-xl outline-0 hover:bg-background-tertiary/60 placeholder:text-content-tertiary mt-1 hover:border hover:border-primary',
                'border-accent-red border' => $hasError,
            ]) />
    </label>

    @if ($errors->has($name))
        <x-warning-message variant='error'>
            {{ $errors->first($name) }}
        </x-warning-message>
    @endif
</div>
