<x-app-layout>
<div>
    <form action="dashboard" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <select name="" id="">
                <option value=""></option>
                @foreach ($departements as $dpt)
                   <option value="">{{$dpt->nom}}</option> 
                @endforeach
            </select>
        </div>
        <div>
            <select name="" id="">
                <option value=""></option>
                @foreach ($filieres as $filiere)
                   <option value="">{{$dpt->}}</option> 
                @endforeach
            </select>  
        </div>
        <input type="file" name="file">
       <button type="submit">Uploader</button>
    </form>
</div>
</x-app-layout>
