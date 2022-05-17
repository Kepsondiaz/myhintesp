<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <table class="table">
        <thead class="thead-primary">
            <tr>
                <th scope="col">Nom du fichier</th>
                <th scope="col">Uploader</th>
                <th scope="col">Taille(ko)</th>
                <th scope="col">Date d'upload</th>
                <th scope="col">Téléchagement</th>
              </tr>
        </thead>
        <tbody>

        
            @foreach ($fichiers as $fichier)
                <tr>
                    <th scope="row">{{$fichier->nom_fichier}}</th>
                    <td>{{$fichier->name}}</td>
                    <td>{{$fichier->size_fichier}}</td>
                    <td>{{$fichier->created_at}}</td>
                    <td><a href=" {{url('/download', $fichier->url_fichier)}} " >Télécharger</a></td>
                </tr>
                {{-- <div class="fichier_recup">
                    <p>
                        <a href=" {{url('/download', $fichier->url_fichier)}} ">{{$fichier->nom_fichier}}</a>
                        <span>
                            <i>Uploader par: {{$fichier->name}}</i>
                            <i>le {{$fichier->created_at}}</i>
                            <i>Taille {{$fichier->size_fichier}} ko</i>
                        </span> <br>
                    </p>    
                </div> --}}
            @endforeach
    </tbody>
    </table>
</x-app-layout>