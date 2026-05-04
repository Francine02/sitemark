@props(['id' => null])

<h1 id="{{ $id }}" class="heading-small relative w-fit">
    {{ $slot }}
    <span class="absolute left-0 -bottom-1 w-5.5 h-0.5 bg-accent-orange"></span>
</h1>
