<x-app-layout>
<div>
    <form action="dashboard" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="departements" class="form-label">Départements</label>
            <select class="form-control" name="" id="departements">
                <option value="">choisir un Départements</option>
                @foreach ($departements as $dpt)
                   <option value="{{$dpt->id}}">{{$dpt->nom}}</option> 
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="filieres" class="form-label">Filières</label>
            <select class="form-control" name="filieres" id="filieres">
                    {{-- options filieres --}}
            </select>  
        </div>
        <div class="mb-3">
            <label for="matieres" class="form-label">Matieres</label>
            <select class="form-control" name="matieres" id="matieres">
                {{-- options matieres --}}
            </select>
        </div>
        <div class="mb-3">
            <label for="niveaux"  class="form-label">Niveaux</label>
            <select name="" id=""></select>
        </div>
        <input type="file" name="file">
       <button type="submit">Uploader</button>
    </form>
</div>
    <script>
                $(document).ready(function () {
                $('#departements').on('change', function () {
                let id = $(this).val();
                $('#filieres').empty();
                $('#filieres').append('<option value="0" disabled selected>Processing...</option>');
                $.ajax({
                type: 'get',
                url: '/getfiliere/' + id,
                success: function (response) {
                    console.log(response);   
                $('#filieres').empty();
                $('#filieres').append(`<option value="0" disabled selected>choisir une Filière*</option>`);
                response.forEach(element => {
                    $('#filieres').append(`<option value="${element['id']}">${element['intitule']}</option>`);
                    });
                }
            });
        });
    });
    </script>
    <script>
            $(document).ready(function () {
                $('#filieres').on('change', function () {
                let id = $(this).val();
                $('#matieres').empty();
                $('#matieres').append('<option value="0" disabled selected>Processing...</option>');
                $.ajax({
                type: 'get',
                url: '/getmatiere/' + id,
                success: function (response) {
                    console.log(response);   
                $('#matieres').empty();
                $('#matieres').append(`<option value="0" disabled selected>choisir une Matiere*</option>`);
                response.forEach(element => {
                    $('#matieres').append(`<option value="${element['id']}">${element['nom_matiere']}</option>`);
                    });
                }
            });
        });
    });
    </script>
</x-app-layout>
