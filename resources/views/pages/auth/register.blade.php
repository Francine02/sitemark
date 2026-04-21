@extends('layouts.auth')

@section('content-auth')
    <x-title>
        Criar conta
    </x-title>

    <form method="POST" action="{{ route('register') }}" class="pt-5">
        @csrf

        <div class="grid grid-cols-2 gap-5">
            <x-input name="name" placeholder="Maria" label="Nome" />

            <x-input name="surname" placeholder="Hermisstton" label="Sobrenome" />
        </div>

        <x-input placeholder="maria_hermiston@gmail.com" />

        <x-input name="password" label="Senha" placeholder="****" type="password" />

        <x-button type="submit" class="mt-24 flex mx-auto">
            Criar conta
        </x-button>
    </form>
@endsection

@section('content-footer')
    Já tem cadastro?

    <a href="{{ route('login') }}" class="text-content-primary hover:brightness-90 hover:cursor-pointer">
        Acessar conta
    </a>
@endsection
