@extends('layouts.default')

<head>
    <title>Sitemark | Error</title>
</head>
@section('content')
    <main class="min-h-screen 2xl:max-w-7xl mx-auto flex flex-col justify-center items-center p-2">
        <img onclick="window.location.href='{{ route('login') }}'" class="mx-auto mb-3 hover:cursor-pointer"
            src="/images/logo.png" alt="sitemark" />

        <section class="text-content-primary m-auto md:max-w-3xl w-full">
            @yield('content-error')
        </section>
    </main>
@endsection
