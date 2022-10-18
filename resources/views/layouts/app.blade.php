<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-S24NG4FTG9"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-S24NG4FTG9');
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>myhintesp</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
        <script src="https://kit.fontawesome.com/26ef44b318.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="{{URL::to('/css/app.css')}}">
        <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />        


        @livewireStyles

        <!-- Scripts -->
        <script src="{{ URL::to('/js/app.js')}}" defer></script>
    </head>
    <body class="font-sans antialiased bg-light">
        <x-jet-banner />
        @livewire('navigation-menu')

        {{-- <!-- Page Heading -->
        <header class="d-flex py-3 bg-white shadow-sm border-bottom">
            <div class="container">
                {{ $header }}
            </div>
        </header> --}}

        <!-- Page Content -->
        <main class="container my-5">
            {{ $slot }}
        </main>

        {{-- footer --}}

    

        @stack('modals')

        @livewireScripts

        
        @stack('scripts')
    </body>
</html>
