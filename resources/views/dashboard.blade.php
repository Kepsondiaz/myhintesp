<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div class="container h-100">
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
