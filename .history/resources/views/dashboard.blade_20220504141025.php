<x-app-layout>
<div>
    <form action="dashboard" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="departements" class="form-label">Départements</label>
            <select class="form-control" name="" id="departements">
                <option value=""></option>
                @foreach ($departements as $dpt)
                   <option value="">{{$dpt->nom}}</option> 
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="filieres" class="form-label">Filières</label>
            <select class="form-control" name="filieres" id="filieres">
                {{-- @foreach ($filieres as $filiere)
                   <option value="">{{$filiere->intitule}}</option> 
                @endforeach --}}
            </select>  
        </div>
        <input type="file" name="file">
       <button type="submit">Uploader</button>
    </form>
</div>
    <script>
                $(document).ready(function () {
                $('#departements').on('change', function () {
                let id = $(this).val();
                console.log(); 
                $('#filieres').empty();
                $('#filieres').append('<option value="0" disabled selected>Processing...</option>');
                $.ajax({
                type: 'GET',
                url: 'getfilieres/' + id,
                success: function (response) {
                var response = JSON.parse(response);
                console.log(response);   
                $('#filieres').empty();
                $('#filieres').append(`<option value="0" disabled selected>Select Sub Category*</option>`);
                response.forEach(element => {
                    $('#filieres').append(`<option value="${element['id']}">${element['intitule']}</option>`);
                    });
                }
            });
        });
    });
    </script>
</x-app-layout>
