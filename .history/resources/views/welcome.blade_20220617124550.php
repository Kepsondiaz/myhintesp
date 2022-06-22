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
            margin-top: 
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
    
<div class="center">
    <table class="table">
        <thead class="thead-primary">
            <tr>
                <th scope="col">Nom du fichier</th>
                <th scope="col">Cours</th>
                <th scope="col">Semestres</th>
                <th scope="col">Taille(ko)</th>
              </tr>
        </thead>
        <tbody>

        
            @foreach ($fichiers as $fichier)
                <tr>
                    <th scope="row">{{$fichier->nom_fichier}}</th>
                    <td>{{$fichier->nom_matiere}}</td> 
                    <td>{{$fichier->semestres}}</td> 
                    <td>{{$fichier->size_fichier}}</td> 
                    {{-- <td><a href=" {{url('/download', $fichier->url_fichier)}} " class="btn btn-success">Télécharger</a></td> --}}
                </tr>
            @endforeach
    </tbody>
    </table>
    <span>{{ $fichiers->links()}}</span> 
</div>


   
</body>
</html>
