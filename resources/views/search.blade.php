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
                @if (count($fichiers_search)==0)
                <tr>
                    <center>
                        <p class="btn btn-danger">Fichier non trouvé ......</p>
                    </center>
                </tr>
                @endif
                @foreach ($fichiers_search as $fichier_search)
                {{-- {{dd($fichier_search->nom_matiere)}} --}}
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
                        <td>{{$fichier_search->tmp_nom_fichier}}</td>
                        <td>{{$fichier_search->nom_matiere}}</td>
                        <td>{{$fichier_search->semestres}}</td>
                        <td>{{$fichier_search->niveau_matiere}}</td>
                        <td>{{$fichier_search->intitule}}</td>
                        <td>{{$fichier_search->nom}}</td>
                        <td><a href=" {{url('/download', $fichier_search->tmp_url_fichier)}} " class="btn btn-success">Télécharger</a></td>                </tr>
                @endforeach 
            </tbody>
        </table>
</div>
    {{-- <span>{{ $fichiers_search->links()}}</span>  --}}
</x-app-layout>
