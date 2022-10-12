<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="container h-100">
                <form action="{{url('/dashboard')}}" method="POST">
                    @csrf
                    <table class="table align-middle mb-0">
                        <thead class="thead-primary">
                            <tr>
                                <th scope="col">
                                    <select class="form-control" name="departement" id="departements">
                                        <option value="">choisir un Départements*</option>
                                        <option value="Génie Chimique et Biologie Appliquée">Génie Chimique et Biologie Appliquée</option>
                                        <option value="Génie Civile">Génie Civile</option>
                                        <option value="Génie Electrique">Génie Electrique</option>
                                        <option value="Génie Informatique">Génie Informatique</option>
                                        <option value="Génie Mécanique">Génie Mécanique</option>
                                        <option value="Gestion">Gestion</option>
                                    </select>
                                </th>
                                <th scope="col">
                                    <input class="form-control" type="text" name="filieres" id="filieres" placeholder="ex: Informatique">
                                </th>
                                <th scope="col">
                                    <input class="form-control" type="text" name="matieres" id="matieres" placeholder="ex: Mathématique">
                                </th>
                                <th scope="col">
                                    <select name="niveaux" id="niveaux" class="form-control" >
                                        <option value="">choisir un Niveau*</option>
                                        <option value="dut1-dst1">DUT1-DST1</option>
                                        <option value="dut2-dst2">DUT2-DST2</option>
                                        <option value="licence">LICENCE</option>
                                        <option value="dic1">DIC1</option>
                                        <option value="master1">MASTER1</option>
                                        <option value="dic2">DIC2</option>
                                        <option value="master2">MASTER2</option>
                                        <option value="dic3">DIC3</option>
                                    </select>
                                </th>
                                <th scope="col">
                                    <select name="semestres" id="semestres" class="form-control">
                                        <option value="">choisir une Semestre*</option>
                                        <option value="semestre1">Semestre 1</option>
                                        <option value="semestre2">Semestre 2</option>
                                    </select>
                                </th>
                                <th scope="col">
                                    <input class="btn btn-success" type="submit">
                                </th>
                            </tr>
                        </thead>
                    </table>
                </form>
            <table class="table align-middle mb-0 bg-white">
                <thead class="thead-primary">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nom du fichier</th>
                        <th scope="col">Matieres</th>
                        <th scope="col">Semestres</th>
                        <th scope="col">Niveau</th>
                        <th scope="col">Filieres</th>
                        <th scope="col">Departement</th>
                        <th scope="col">Télécharger</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($tmp_fichiers as $tmp_fichier)
                        <tr>
                            <th>
                                <div class="d-flex align-items-center">
                                    <img
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/langfr-800px-PDF_file_icon.svg.png"
                                        alt=""
                                        style="width: 25px; height: 25px"
                                        {{-- class="rounded-circle" --}}
                                        />
                                <div class="ms-3">
                            </th>
                            <td>{{$tmp_fichier->tmp_nom_fichier}}</td>
                            <td>{{$tmp_fichier->matieres->nom_matiere}}</td>
                            <td>{{$tmp_fichier->matieres->semestres}}</td>
                            <td>{{$tmp_fichier->matieres->niveau_matiere}}</td>
                            <td>{{$tmp_fichier->matieres->filieres->intitule}}</td>
                            <td>{{$tmp_fichier->matieres->filieres->departements->nom}}</td>
                            <td><a href=" {{url('/download', $tmp_fichier->tmp_url_fichier)}} " class="btn btn-success">Télécharger</a></td>                </tr>
                    @endforeach 
                </tbody>
            </table>
    </div>

    <span>{{ $tmp_fichiers->links()}}</span> 
</x-app-layout>
