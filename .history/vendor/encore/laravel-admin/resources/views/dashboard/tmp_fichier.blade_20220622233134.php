<div>
    <table class="table">
        <thead class="thead-primary bg-primary">
            <tr>
                <th scope="col">Nom du fichier</th>
                <th scope="col">Cours</th>
                <th scope="col">Semestres</th>
                <th scope="col">Taille(ko)</th>
                <th scope="col">Action</th>
                <th scope="col">Suppression</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($fichier_tmp as $fichiers_tmp)
                <tr>
                    <th scope="row">{{$fichiers_tmp->tmp_nom_fichier}}</th>
                    <td>{{$fichiers_tmp->nom_matiere}}</td> 
                    <td>{{$fichiers_tmp->semestres}}</td> 
                    <td>{{$fichiers_tmp->tmp_size_fichier}}</td> 
                    <td><input type="submit" class="btn btn-success" value="Valider"></td>  
                    <td><input type="submit" class="btn btn-danger" value="Valider"></td>              
                </tr>
            @endforeach
    </tbody>
    </table>
</div>