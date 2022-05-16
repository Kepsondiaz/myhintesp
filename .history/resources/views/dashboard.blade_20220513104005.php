<x-app-layout>
    <x-slot name="header">
    </x-slot>
    @foreach ($fichiers as $fichier)
        <a target="" href="{{ \Storage::url($fichier->url_fichier)}}">{{$fichier->nom_fichier}}</a>
    @endforeach
</x-app-layout>