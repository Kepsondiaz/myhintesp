<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <table class="table">
        <thead class="thead-primary">
            <tr>
                <th scope="col">Nom du fichier</th>
                <th scope="col">Matieres</th>
                <th scope="col">Semestres</th>
                <th scope="col">Niveau</th>
                <th scope="col">Filieres</th>
                <th scope="col">Departement</th>
                <th scope="col">Valider</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>

             @foreach ($tmp_fichiers as $tmp_fichier)
                <tr>
                    <td>{{$tmp_fichier->tmp_nom_fichier}}</td>
                    <td>{{$tmp_fichier->matieres->nom_matiere}}</td>
                    <td>{{$tmp_fichier->matieres->semestres}}</td>
                    <td>{{$tmp_fichier->matieres->niveau_matiere}}</td>
                    <td>{{$tmp_fichier->matieres->filieres->intitule}}</td>
                    <td>{{$tmp_fichier->matieres->filieres->departements->nom}}</td>
                    <td><a href=" {{url('admin/valider', $tmp_fichier->id)}} " class="btn btn-success">Valider</a></td>
                    <td><a href=" {{url('admin/supprimer', $tmp_fichier->id)}} " class="btn btn-danger">Supprimer</a></td>
                </tr>
            @endforeach 
    </tbody>
    </table>
     {{-- <span>{{ $tmp_fichiers->links()}}</span>  --}}
</x-app-layout>