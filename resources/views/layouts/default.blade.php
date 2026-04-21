<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Sitemark') }}</title>

    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    <!-- Toastify -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css" />
</head>

<body class="bg-background-primary font-main">
    @yield('content')

    @if (session('success'))
        <script>
            Toastify({
                text: `
                <div style="display:flex; align-items:center; gap:8px;">
                    <i class="iconoir-check-circle-solid text-accent-green"></i>
                    <span>{{ session('success') }}</span>
                </div>
            `,
                duration: 3000,
                gravity: "top",
                position: "right",
                escapeMarkup: false,
                style: {
                    background: "#110f0e"
                }
            }).showToast();
        </script>
    @endif

    @if (session('error'))
        <script>
            Toastify({
                text: `
                <div style="display:flex; align-items:center; gap:8px;">
                    <i class="iconoir-xmark-circle-solid text-accent-red"></i>
                    <span>{{ session('error') }}</span>
                </div>
            `,
                duration: 3000,
                gravity: "top",
                position: "right",
                escapeMarkup: false,
                style: {
                    background: "#110f0e"
                }
            }).showToast();
        </script>
    @endif
</body>

</html>
