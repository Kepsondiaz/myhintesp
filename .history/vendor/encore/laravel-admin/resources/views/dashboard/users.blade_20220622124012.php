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

            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$fichier->name}}</th>
                    <td>{{$fichier->emmail}}</td> 
                    <td><a href=" {{url('/download', $fichier->url_fichier)}} " class="btn btn-success">Télécharger</a></td>
                </tr>
            @endforeach
    </tbody>
    </table>
</div>