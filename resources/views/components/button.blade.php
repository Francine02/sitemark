@props([
    'variant' => 'default',
    'type' => 'button',
    'class' => '',
])

@php
    $variants = [
        'default' => 'px-8 py-3 text-content-inverse bg-accent-orange rounded-4xl font-semibold',
        'dark' => 'px-8 py-3.5 bg-background-secondary text-accent-orange rounded-4xl font-semibold',
    ];

    $classes = $variants[$variant] ?? $variants['default'];

@endphp

<button type="{{ $type }}"
    {{ $attributes->merge([
        'class' => "hover:cursor-pointer hover:brightness-90 disabled:cursor-not-allowed disabled:hover:brightness-100 $classes $class",
    ]) }}>
    <span class="btn-text items-center flex gap-2">
        {{ $slot }}
    </span>

    <x-loading />
</button>
