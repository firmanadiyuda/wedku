<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data :class="{ 'mode-dark': $store.theme.isDarkMode }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>


    {{-- /* ---------------------------------- Icons --------------------------------- */ --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    {{-- /* -------------------------------------------------------------------------- */ --}}


    {{-- /* ---------------------------------- Fonts --------------------------------- */ --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    {{-- /* -------------------------------------------------------------------------- */ --}}


    {{-- /* --------------------------------- Styles --------------------------------- */ --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @livewireStyles
    {{-- /* -------------------------------------------------------------------------- */ --}}


    {{-- /* --------------------------------- Scripts -------------------------------- */ --}}
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer data-turbolinks-eval="false" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@ryangjchandler/spruce@2.x.x/dist/spruce.umd.js" data-turbolinks-eval="false"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js" integrity="sha512-G3jAqT2eM4MMkLMyQR5YBhvN5/Da3IG6kqgYqU9zlIH4+2a+GuMdLb5Kpxy6ItMdCfgaKlo2XFhI0dHtMJjoRw==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
    <script src="{{ asset('js/app.js') }}" data-turbolinks-eval="false"></script>
    {{-- /* -------------------------------------------------------------------------- */ --}}


</head>

<body class="font-sans antialiased">
    <div class=" min-h-screen pt-0 transition duration-500 ease-in-out bg text-black dark:text-white z-0">

        {{-- /* --------------------------------- Navbar --------------------------------- */ --}}
        @if($navbar == "on")
        {{-- @include('navbar.navbar') --}}
        <x-navbar.navbar></x-navbar>
        @endif
        {{-- /* -------------------------------------------------------------------------- */ --}}


        {{-- /* ------------------------------ Page Content ------------------------------ */ --}}
        <main>
            {{ $slot }}
        </main>
        {{-- /* -------------------------------------------------------------------------- */ --}}


        {{-- /* --------------------------------- Footer --------------------------------- */ --}}
        <footer>
            @if($footer == "on")
            @include('footer')
            @endif
        </footer>
        {{-- /* -------------------------------------------------------------------------- */ --}}

    </div>
    @stack('modals')
    <livewire:toast />

</body>
</html>
