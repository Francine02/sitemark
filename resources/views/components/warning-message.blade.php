@props(['variant' => 'error'])

@php
    $icons = [
        'error' => 'iconoir-xmark-circle-solid text-accent-red',
        'success' => 'iconoir-check-circle-solid text-accent-green',
    ];

    $iconClass = $icons[$variant] ?? $icons['info'];
@endphp

<div class="flex gap-1.5 items-center">
    <i class="{{ $iconClass }} text-xs"></i>
    <p class="paragraph-small text-content-secondary">{{ $slot }}</p>
</div>
