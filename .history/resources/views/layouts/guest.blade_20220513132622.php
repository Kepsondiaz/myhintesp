<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <header class="d-flex py-3 bg-white shadow-sm border-bottom">
        <div class="container-fluid fixed-top p-4">
            <div class="col-12">
                <div class="d-flex justify-content-end">
                    @if (Route::has('login'))
                        <div class="">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
    
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                                @endif
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </header>
    <body class="bg-light font-sans antialiased">
        {{ $slot }}
    </body>
</html>