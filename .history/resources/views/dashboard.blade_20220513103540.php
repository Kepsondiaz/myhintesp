<x-app-layout>
    <x-slot name="header">
    </x-slot>
    @foreach ($fichiers as $fichier)
        <a href="{{ storage::url($fichier->url_fichier)}}">{{$fichier->nom}}</a>
    @endforeach
</x-app-layout>