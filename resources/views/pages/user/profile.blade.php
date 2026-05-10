@extends('layouts.content')

<head>
    <title>Sitemark | Perfil</title>
</head>
@section('content-dashboard')
    <div class="flex justify-between items-center mb-17 lg:mb-0">
        <x-title>Perfil</x-title>

        <x-button form="profile-form" type="submit" class="w-30">Salvar</x-button>
    </div>

    <form id="profile-form" class="flex flex-col lg:flex-row-reverse gap-10" action="{{ route('profile.update') }}"
        method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <x-input-image
            src="{{ auth()->user()->image ? asset('storage/' . auth()->user()->image) : asset('images/preview-default.png') }}" />

        <div class="w-full">
            <x-input name="name" placeholder="Maria" label="Nome" />

            <x-input placeholder="maria_hermiston@gmail.com" />

            <x-textarea />
        </div>

    </form>
@endsection
