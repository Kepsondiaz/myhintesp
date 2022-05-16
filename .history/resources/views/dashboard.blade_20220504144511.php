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

<script type='text/javascript'>
    $(document).ready(function(){
 
       // Department Change
       $('#').change(function(){
 
          // Department id
          var id = $(this).val();
 
          // Empty the dropdown
          $('#sel_emp').find('option').not(':first').remove();
 
          // AJAX request 
          $.ajax({
            url: 'getEmployees/'+id,
            type: 'get',
            dataType: 'json',
            success: function(response){
 
              var len = 0;
              if(response['data'] != null){
                 len = response['data'].length;
              }
 
              if(len > 0){
                 // Read data and create <option >
                 for(var i=0; i<len; i++){
 
                    var id = response['data'][i].id;
                    var name = response['data'][i].name;
 
                    var option = "<option value='"+id+"'>"+name+"</option>";
 
                    $("#sel_emp").append(option); 
                 }
              }
 
            }
          });
       });
    });
    </script>
</x-app-layout>
