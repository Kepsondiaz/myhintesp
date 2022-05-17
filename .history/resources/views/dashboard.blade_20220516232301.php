<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nom fichier</th>
                <th scope="col">Uploader par</th>
                <th scope="col">Taille</th>
                <th scope="col">Date d'upload</th>
                <th scope="col">Téléchagement</th>
              </tr>
        </thead>
        <tbody>

        
            @foreach ($fichiers as $fichier)
                <div class="fichier_recup">
                    <p>
                        <a href=" {{url('/download', $fichier->url_fichier)}} ">{{$fichier->nom_fichier}}</a>
                        <span>
                            <i>Uploader par: {{$fichier->name}}</i>
                            <i>le {{$fichier->created_at}}</i>
                            <i>Taille {{$fichier->size_fichier}} ko</i>
                        </span> <br>
                    </p>    
                </div>
            @endforeach
        </tbody>
    </table>
</x-app-layout>