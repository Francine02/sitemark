@extends('layouts.content')

@section('content-dashboard')
    <div class="flex justify-between items-center mb-17">
        <x-title>
            Links
        </x-title>

        <x-button type="button" class="open-modal-btn" data-action="create" variant="dark">
            <i class="iconoir-plus-circle text-lg"></i> Adicionar link
        </x-button>
    </div>

    <x-modal>
        <x-link-form />
    </x-modal>

    <form id="reorder-form" method="POST" action="{{ route('links.reorder') }}">
        @csrf
        @method('PUT')
        <input type="hidden" name="order" id="order-input">
    </form>
    <div id="links-list" class="space-y-4 max-h-[50svh] overflow-y-auto px-5 md:px-10 z-0">
        @foreach ($links as $link)
            <x-card :link="$link" />
        @endforeach
    </div>
@endsection
