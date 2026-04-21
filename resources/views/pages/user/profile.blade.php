@extends('layouts.content')

@section('content-dashboard')
    <div class="flex justify-between items-center mb-17 lg:mb-0">
        <x-title>Perfil</x-title>

        <x-button type="submit" class="w-30">Salvar</x-button>
    </div>

    <form class="flex flex-col lg:flex-row-reverse gap-10" action="{{ route('profile.update') }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <x-input-image />

        <div class="w-full">
            <x-input name="name" placeholder="Maria" label="Nome" />

            <x-input name="surname" placeholder="Hermisstton" label="Sobrenome" />

            <x-input placeholder="maria_hermiston@gmail.com" />

            <x-textarea />
        </div>

    </form>
@endsection
