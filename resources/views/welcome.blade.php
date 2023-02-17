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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
        <div class="modal fade" id="LoginBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">MYHINTESP</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <strong>myhintesp, la plateforme idéale pour réviser</strong>
                </div>
                <div class="modal-footer">
                  <a href="/login" class="btn btn-secondary" >Se Connecter</a>
                  <a href="/register" class="btn btn-primary">S'inscrire</a>
                </div>
              </div>
            </div>
          </div>
        <p></p>
        <p> <p> 
        </p> </p>
        </p> </p>
    </nav>
</header>
    {{-- <div class="container-fluid fixed-top p-4"> --}}
        <div class="container h-100 mt-2">
            <form action="" method="GET" class="row row-cols-lg-auto g-3">
                @csrf
                <div class="col-sm-2">
                    <select class="form-control" name="departement" id="departements">
                        <option value="">choisir un Départements*</option>
                        <option value="Génie Chimique et Biologie Appliquée">Génie Chimique et Biologie Appliquée</option>
                        <option value="Génie Civile">Génie Civile</option>
                        <option value="Génie Electrique">Génie Electrique</option>
                        <option value="Génie Informatique">Génie Informatique</option>
                        <option value="Génie Mécanique">Génie Mécanique</option>
                        <option value="Gestion">Gestion</option>
                    </select> 
                </div>
                <div class="col-sm-2">
                    <input class="form-control" type="text" name="filieres" id="filieres" placeholder="entrer une filière">
                </div>
                <div class="col-sm-2">
                    <input class="form-control" type="text" name="matieres" id="matieres" placeholder="entrer une matière">
                </div>
                <div class="col-sm-2">
                    <select name="niveaux" id="niveaux" class="form-control" >
                        <option value="">choisir un Niveau*</option>
                        <option value="dut1-dst1">DUT1-DST1</option>
                        <option value="dut2-dst2">DUT2-DST2</option>
                        <option value="licence">LICENCE</option>
                        <option value="dic1">DIC1</option>
                        <option value="dic2">DIC2</option>
                        <option value="dic3">DIC3</option>
                        <option value="master1">MASTER1</option>
                        <option value="master2">MASTER2</option>
                        <option value="dit1">DIT1</option>
                        <option value="dit2">DIT2</option>
                    </select>
                </div>
                <div class="col-sm-2">
                    <select name="semestres" id="semestres" class="form-control">
                        <option value="">choisir une Semestre*</option>
                        <option value="semestre1">Semestre 1</option>
                        <option value="semestre2">Semestre 2</option>
                    </select> 
                </div>
                <div class="col-sm-2">
                    <input class="btn btn-success" type="submit" value="Rechercher">
                </div>
            </form>
            <br>
            @if (count($tmp_fichiers) == 0)
            <div class="card text-center bg-danger text-white">
                <div class="card-body">
                  <h5 class="card-title">Aucun hints n'est disponible concernant vôtre rechercher.</h5>
                  <p class="card-text">Souhaitez-vous ajouter un hint</p>
                  <a href={{url("/upload")}} class="btn btn-primary">Uploader un hint.</a>
            </div>
                {{-- <div class="card-footer text-muted">
                  2 days ago
                </div> --}}
              </div>
            @endif
            @foreach ($tmp_fichiers as $tmp_fichier)
                <div class="card">
                    <div class="card-header">
                        
                    </div>
                    <div class="card-body">
                    <h5 class="card-title"><strong>{{$tmp_fichier->tmp_nom_fichier}}</strong></h5>
                    <div class="row">
                        <div class="col-sm-4">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">{{$tmp_fichier->nom_matiere}}</h5>
                              <p class="card-text">{{$tmp_fichier->semestres}}</p>
                        
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">{{$tmp_fichier->niveau_matiere}}</h5>
                              <p class="card-text">{{$tmp_fichier->intitule}}</p>
                        
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">{{$tmp_fichier->nom}}</h5>
                          
                              </div>
                            </div>
                          </div>
                      </div>
                    <br>
                    @if (auth()->check())
                        <a href=" {{url('/download', $tmp_fichier->tmp_url_fichier)}} " class="btn btn-success">Télécharger</a>
                    @else
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#LoginBackdrop">Télécharger</a>
                    @endif
                    </div>
                </div>
                <br>
            @endforeach
    </div>
    <br>
    <span>{{ $tmp_fichiers->links()}}</span> 
</body>
</html>
