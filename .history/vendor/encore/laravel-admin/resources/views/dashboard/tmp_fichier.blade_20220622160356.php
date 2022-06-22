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
                    <th scope="row">{{$fichier_tmp->tmp_nom_fichier}}</th>
                    <td>{{$fichier_tmp->tmpnom_matiere}}</td> 
                    <td>{{$fichier_tmp->semestres}}</td> 
                    <td>{{$fichier_tmp->size_fichier}}</td> 
                    <td><a href=" {{url('/download', $fichier->url_fichier)}} " class="btn btn-success">Télécharger</a></td>
                </tr>
            @endforeach
    </tbody>
    </table>
</div>