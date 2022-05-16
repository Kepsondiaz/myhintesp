<x-app-layout>
    <x-slot name="header">
    </x-slot>
    @foreach ($fichiers as $fichier)
        <div class="fichier_recup">
            <p>
                <a target="blank" href=" {{url('/download', $fichier->nom_fichier)}} ">{{$fichier->nom_fichier}}</a>
                <span><i>Uploader le {{$fichier->created_at}}</i></span> <br>
            </p>
        </div>
    @endforeach
</x-app-layout>