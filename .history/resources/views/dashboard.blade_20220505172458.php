<x-app-layout>
<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div>
            <div></div>
            <div>
                class="modal-content"
            </div>
        </div>
    </div>

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
