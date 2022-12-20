<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div>
        
    </div>
    <div class="container h-100">
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
                @if (count($tmp_fichiers)==0)
                <div class="card text-center bg-danger text-white">
                    <div class="card-header">
                      Featured
                    </div>
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
                        <a href=" {{url('/download', $tmp_fichier->tmp_url_fichier)}} " class="btn btn-success">Télécharger</a>
                        </div>
                    </div>
                    <br>
                @endforeach
    </div>
    <br>
    <span>{{ $tmp_fichiers->links()}}</span> 
</x-app-layout>
