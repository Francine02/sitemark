@extends('layouts.default')

@section('content')
    <main class="grid lg:grid-cols-2 p-5 lg:min-h-screen 2xl:max-w-7xl 2xl:mx-auto gap-10">
        <img class="h-32 object-cover rounded-2xl w-full lg:h-full lg:object-fill" src="/images/thumbnail.png"
            alt="thumbnail" />

        <section class="text-content-primary m-auto lg:max-w-sm w-full">
            <img class="mx-auto mb-16" src="/images/logo.png" alt="sitemark" />
            @yield('content-auth')

            <p class="block text-center text-content-secondary text-xs pt-24">
                @yield('content-auth-footer')
            </p>
        </section>
    </main>
@endsection
