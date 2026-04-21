@extends('layouts.default')

@section('content')
    <main class="p-5 lg:min-h-screen 2xl:max-w-7xl 2xl:mx-auto gap-10 relative mb-40 lg:mb-0">
        <img onclick="window.location.href='{{ route('home') }}'" class="mx-auto mb-16 hover:cursor-pointer" src="/images/logo.png" alt="sitemark" />

        <section class="text-content-primary m-auto lg:max-w-3xl w-full">
            @yield('content-dashboard')

        </section>

        <x-nav-bar/>
    </main>
@endsection
