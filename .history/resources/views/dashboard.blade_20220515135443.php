<x-app-layout>
    <x-slot name="header">
    </x-slot>
    @foreach ($fichiers as $fichier)
        <div class="fichier_recup">
            <a target="blank" href="{{ \Storage::url($fichier->url_fichier)}}">{{$fichier->nom_fichier}}</a>
            <s><i>Uploader le {{$fichier->created_at}}</i></span> <br>
        </div>
    @endforeach
</x-app-layout>