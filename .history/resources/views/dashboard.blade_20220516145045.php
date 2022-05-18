<x-app-layout>
    <x-slot name="header">
    </x-slot>
    @foreach ($fichiers as $fichier)
        <div class="fichier_recup">
            <p>
                <i class="fa-solid fa-file-pdf"></i>
                <a href=" {{url('/download', $fichier->url_fichier)}} ">{{$fichier->nom_fichier}}</a>
                <span>
                    <i>Uploader le {{$fichier->created_at}}</i>
                    <i>Taille {{$fichier->size_fichier}} ko</i>
                </span> <br>
            </p>
        </div>
    @endforeach
</x-app-layout>