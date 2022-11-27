<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>myhintesp</title>

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
                 @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary">Se Connecter</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary">S'Inscrire</a>
                            @endif
                        @endif
                    </div>
                @endif 
            </div>
            <center class="top-100">
                <div class="position-absolute top-100 start-50 translate-middle-x">
                    <p>
                        <h1>myhintesp la plateforme idéale pour <strong>Réviser</strong></h1>
                        <br>
                        @if (session()->has('message'))
                        <div class="alert alert-danger" role="alert">
                            {{session()->get('message')}}
                        </div>  
                    @endif
                        <img src="images/screen.png" width="100%" alt="">
                        
                    </p> 
                </div>
            </center>
        </div>
    </div>
</header>
    



   
</body>
</html>
