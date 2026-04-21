@extends('layouts.auth')

@section('content-auth')
    <x-title>
        Acessar conta
    </x-title>

    <form method="POST" action="{{ route('login') }}" class="pt-5">
        @csrf

        <x-input />

        <x-input name="password" label="Senha" placeholder="Insira sua senha" type="password" />

        <x-button type="submit" class="mt-24 flex mx-auto">
            Acessar conta
        </x-button>
    </form>

@endsection

@section('content-auth-footer')
    Não tem cadastro?

    <a href="{{ route('register') }}" class="text-content-primary hover:brightness-90 hover:cursor-pointer">
        Criar conta
    </a>
@endsection