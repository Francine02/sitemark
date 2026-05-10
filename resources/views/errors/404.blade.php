@extends('layouts.error')

@section('content-error')
    <section class="text-center space-y-2">
        <img class="mx-auto hover:cursor-pointer w-60 md:w-3/4" src="/images/404.png" alt="erro 404" />

        <h1 class="text-xl md:text-4xl font-black text-accent-orange">Ooops! Página não encontrada</h1>

        <p class="text-xs mg:text-lg text-gray-300 font-semibold">A página que você está tentando acessar "{{ request()->path() }}" não
            existe!
        </p>

        <x-button class="mt-10" onclick="window.location.href='{{ route('login') }}'">Voltar</x-button>
    </section>
@endsection
