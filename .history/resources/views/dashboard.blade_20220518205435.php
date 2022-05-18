<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <table class="table">
        <thead class="thead-primary">
            <tr>
                <th scope="col">Nom du fichier</th>
                <th scope="col">cours</th>
                <th scope="col">Taille(ko)</th>
                <th scope="col">Date d'upload</th>
                <th scope="col">Téléchagement</th>
              </tr>
        </thead>
        <tbody>

        
            @foreach ($fichiers as $fichier)
                <tr>
                    <th scope="row">{{$fichier->nom_fichier}}</th>
                    <td>{{$fichier->nom_matiere}}</td>
                    <td>{{$fichier->size_fichier}}</td>
                    <td>{{$fichier->created_at}}</td>
                    <td><a href=" {{url('/download', $fichier->url_fichier)}} " class="btn btn-success">Télécharger</a></td>
                </tr>
            @endforeach
    </tbody>
    </table>
</x-app-layout>