<x-app-layout>
<div>
    <form action="dashboard" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="departements" class="form-label">Départements</label>
            <select class="form-control" name="" id="departements">
                <option value=""></option>
                @foreach ($departements as $dpt)
                   <option value="">{{$dpt->nom}}</option> 
                @endforeach
            </select>
        </div>
        <div>
            <label for="filieres" class="form-label">Filières</label>
            <select name="" id="">
                <option value=""></option>
                @foreach ($filieres as $filiere)
                   <option value="">{{$filiere->intitule}}</option> 
                @endforeach
            </select>  
        </div>
        <input type="file" name="file">
       <button type="submit">Uploader</button>
    </form>
</div>
</x-app-layout>
