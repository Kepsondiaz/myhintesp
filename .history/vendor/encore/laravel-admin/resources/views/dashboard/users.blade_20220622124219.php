<div>
    <table class="table">
        <thead class="thead-primary bgb-">
            <tr>
                <th scope="col">Nom d'utilisateur</th>
                <th scope="col">Email</th>
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