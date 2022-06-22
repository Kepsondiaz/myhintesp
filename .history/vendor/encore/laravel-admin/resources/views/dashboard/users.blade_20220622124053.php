<div>
    <table class="table">
        <thead class="thead-primary">
            <tr>
                <th scope="col">Nom du fichier</th>
                <th scope="col">Cours</th>

              </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->name}}</th>
                    <td>{{$user->email}}</td> 
                </tr>
            @endforeach
    </tbody>
    </table>
</div>