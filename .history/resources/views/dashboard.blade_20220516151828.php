<x-app-layout>
    <x-slot name="header">
    </x-slot>
    @foreach ($fichiers as $fichier)
        <div class="fichier_recup">
            <p>
                <a href=" {{url('/download', $fichier->url_fichier)}} ">{{$fichier->nom_fichier}}</a>
                <span>
                    <i>Uploader par: $users</i>
                    <i>le {{$fichier->created_at}}</i>
                    <i>Taille {{$fichier->size_fichier}} ko</i>
                </span> <br>
            </p>
        </div>
    @endforeach
</x-app-layout>