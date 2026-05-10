@extends('layouts.error')

@section('content-error')
    <section class="text-center space-y-2">
        <img class="mx-auto hover:cursor-pointer w-50 md:w-96" src="/images/500.png" alt="erro 500" />

        <h1 class="text-xl md:text-4xl font-black text-accent-orange">Ooops! Alguma coisa deu errada</h1>

        <p class="text-xs md:text-lg text-gray-300 font-semibold">Por favor, tente novamente mais tarde!
        </p>

        <x-button class="mt-10" onclick="window.location.href='{{ route('login') }}'">Voltar</x-button>
    </section>
@endsection
