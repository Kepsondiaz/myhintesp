<div>
    @foreach($users as $user)
    {
        <p>{{$user->name}}  {{$user->em}}</p>
    }
</div>