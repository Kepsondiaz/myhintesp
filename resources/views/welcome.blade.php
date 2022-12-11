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
    <nav class="navbar navbar-expand-md navbar-light bg-white border-bottom sticky-top-10">
        <p> </p>
        <p><p> 
        </p> </p>
    </nav>
    <div class="container-fluid fixed-top p-4">
        {{-- <div class="col-12">
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
            </div> --}}
            <center class="top-50">
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
                    <div class="d-grid gap-2 d-md-flex">
                        <a class="btn btn-primary btn-lg px-4 me-md-2" href="{{url('/upload')}}">Uploader</a>
                        <a class="btn btn-outline-secondary btn-lg px-4 me-md-2" href="{{url('/dashboard')}}">voir les fichiers</a>
                    </div>
                </div>
            </center>
        </div>
    </div>
</header>
<footer class="text-center text-lg-start bg-white text-muted">
    <p> </p>
</footer>

    


{{-- <div class="card-body text-small">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="/images/partage.png" class="img-fluid fondecran img-responsive" alt="" width="100%" height="100%">
          </div>
          <div class="col-lg-6">
            <h2 class="display-5 fw-bold lh-1 mb-3">myhintesp, la plateforme idéale pour Réviser</h2>
            <p class="lead text-danger">.Seules les personnes ayant un mail <strong>@esp.sn</strong> sont autorisées à créer un compte dans la plateforme</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a class="btn btn-primary btn-lg px-4 me-md-2" href="{{url('/upload')}}">Uploader</a>
            <a class="btn btn-outline-secondary btn-lg px-4 me-md-2" href="{{url('/dashboard')}}">voir les fichiers</a>
            </div>
          </div>
        </div>
      </div>
</div> --}}


   
</body>
</html>
