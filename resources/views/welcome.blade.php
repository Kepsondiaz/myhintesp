<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
            background: #f7fafc;
        }
        .center{
            margin-top: 100px;
            margin-right: 100px;
            margin-left: 100px;
        }
        
    </style>
</head>
<body>
<header>
    <div class="container-fluid fixed-top p-4">
        <div class="col-12">
            <div class="d-flex justify-content-end">
                {{-- @if (Route::has('login'))
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
                @endif --}}
            </div>
            <center class="top-100">
                <div class="position-absolute top-100 start-50 translate-middle-x">
                    <p>
                        <h1>myhintesp</h1>
                        <img src="https://img.icons8.com/sf-regular-filled/2x/compare.png" width="500px" alt="">
                    </p> 
                    <h4><a href="{{url('/dashboard')}}">Commencer à Partager 😉</a></h4>
                </div>
            </center>
        </div>
    </div>
</header>
    



   
</body>
</html>
