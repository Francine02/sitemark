@props([
    'variant' => 'default',
    'type' => 'button',
    'class' => ''
])

@php 
    $variants = [
        'default' => 'px-8 py-3 text-content-inverse bg-accent-orange rounded-4xl font-semibold',
        'dark' => 'px-8 py-3.5 bg-background-secondary text-accent-orange rounded-4xl font-semibold'
    ];

    $classes = $variants[$variant] ?? $variants['default'];

@endphp

<button type="{{ $type }}" class="hover:cursor-pointer hover:brightness-90 {{ $classes }} {{ $class }}">
    {{ $slot }}
</button>
