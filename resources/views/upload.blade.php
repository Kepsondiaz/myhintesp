<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <div id="uploader">
        @if (session()->has('message_danger'))
            <div class="alert alert-danger">
                {{session()->get('message_danger')}}
            </div>
        @endif
        @if (session()->has('message_succes'))
            <div class="alert alert-success" role="alert">
                {{session()->get('message_succes')}}
                <a href="/dashboard" >Voir les fichiers uploader</a>
            </div>  
        @endif
        <form action="upload" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="departements" class="form-label">Départements</label>
                <select class="form-control" name="departement" id="departements" required>
                    <option value="">choisir un Départements*</option>
                    <option value="Génie Chimique et Biologie Appliquée">Génie Chimique et Biologie Appliquée</option>
                    <option value="Génie Civile">Génie Civile</option>
                    <option value="Génie Electrique">Génie Electrique</option>
                    <option value="Génie Informatique">Génie Informatique</option>
                    <option value="Génie Mécanique">Génie Mécanique</option>
                    <option value="Gestion">Gestion</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="filieres" class="form-label">Filières</label>
                <input class="form-control" type="text" name="filieres" id="filieres" required placeholder="ex: Informatique">
            </div>
            <div class="mb-3">
                <label for="matieres" class="form-label">Matieres</label>
                <input class="form-control" type="text" name="matieres" id="matieres" required placeholder="ex: Mathématique">
            </div>
            <div class="mb-3">
                <label for="niveaux"  class="form-label">Niveaux</label>
                <select name="niveaux" id="niveaux" class="form-control" required>
                    <option value="">choisir un Niveau*</option>
                    <option value="dut1-dst1">DUT1-DST1</option>
                    <option value="dut2-dst2">DUT2-DST2</option>
                    <option value="licence">LICENCE</option>
                    <option value="dic1">DIC1</option>
                    <option value="master1">MASTER1</option>
                    <option value="dic2">DIC2</option>
                    <option value="master2">MASTER2</option>
                    <option value="dic3">DIC3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="semestres"  class="form-label">Semestres</label>
                <select name="semestres" id="semestres" class="form-control" required>
                    <option value="">choisir un Semestre*</option>
                    <option value="semestre1">Semestre 1</option>
                    <option value="semestre2">Semestre 2</option>
                </select>
            </div>
            <br>
            <div class="input-group mb-3">
                <input class="form-control" type="file" name="fichier" id="uploader" required>
                <label class="input-group-text" for="">choisir un fichier</label>           
             </div>
           <button class="btnn btn-primary" >Uploader</button>
        </form>
    
    </div>
    
    {{-- javascript
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
        <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

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
                        $('#matieres').append(`<option value="${element['id']}">${element['nom_matiere']} | ${element['niveau_matiere']} | ${element['semestres']}</option>`);
                        });
                    }
                });
            });
        }); 

                    // // Get a reference to the file input element
                    // const inputElement = document.querySelector('input[id="uploader"]');
                    // // Create a FilePond instance
                    // const pond = FilePond.create(inputElement);
                    // FilePond.setOptions({
                    //     server: 
                    //     {
                    //         url:    './uploade',
                    //         headers: {
                    //             'X-CSRF-TOKEN': '{{csrf_token() }}'
                    //         }
                    //     }
                        
                    // });
        </script> --}}
</x-app-layout>