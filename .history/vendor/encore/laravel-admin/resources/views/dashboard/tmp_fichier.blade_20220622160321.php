<div>
    <table class="table">
        <thead class="thead-primary">
            <tr>
                <th scope="col">Nom du fichier</th>
                <th scope="col">Cours</th>
                <th scope="col">Semestres</th>
                <th scope="col">Taille(ko)</th>
                <th scope="col">Téléchagement</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($fichiers_tmp as $fichier_tmp)
                <tr>
                    <th scope="row">{{$fichier_tmp->nom_fichier}}</th>
                    <td>{{$->nom_matiere}}</td> 
                    <td>{{$->semestres}}</td> 
                    <td>{{$->size_fichier}}</td> 
                    <td><a href=" {{url('/download', $fichier->url_fichier)}} " class="btn btn-success">Télécharger</a></td>
                </tr>
            @endforeach
    </tbody>
    </table>
</div>