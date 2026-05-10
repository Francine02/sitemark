@props(['link' => null])

<div data-id="{{ $link->id }}" class="bg-background-secondary min-w-full p-3 rounded-2xl flex flex-wrap items-center gap-3 cursor-grab">
    <div class="flex items-center gap-2 md:gap-4">
        <i class="iconoir-dots-grid-3x3 text-content-tertiary"></i>
        <img src="{{ $link->image }}" alt="{{ $link->title }}" class="object-cover size-8 md:size-12" />
    </div>

    <div class="truncate max-w-40 sm:max-w-xs lg:max-w-md text-content-tertiary">
        <span class="flex items-center gap-2">
            <h3 class="label-large text-content-primary max-w-44 sm:max-w-80 md:max-w-lg truncate md:text-base">{{ $link->title }}
            </h3>

            <x-tag style="background-color: {{ $link->color }}">{{ $link->stream_plataform }}</x-tag>
        </span>

        <a target="_blank" href="{{ $link->url }}"
            class="paragraph-medium hover:brightness-90 cursor-pointer">{{ $link->url }}</a>
    </div>

    <form id="delete-form-{{ $link->id }}" action="{{ route('links.delete', $link->id) }}" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>

    <div class="ml-auto">
        <button form="delete-form-{{ $link->id }}" type="submit" class="p-1 lg:p-2 hover:brightness-80 cursor-pointer">
            <i class="iconoir-trash text-md md:text-lg"></i>
        </button>

        <button type="button" data-action="edit" data-id="{{ $link->id }}" data-title="{{ $link->title }}"
            data-image="{{ asset('storage/' . $link->image) }}" data-url="{{ $link->url }}"
            data-platform="{{ $link->stream_plataform }}"
            class="p-1 lg:p-2 hover:brightness-80 cursor-pointer open-modal-btn">
            <i class="iconoir-edit text-md md:text-lg"></i>
        </button>
    </div>
</div>
