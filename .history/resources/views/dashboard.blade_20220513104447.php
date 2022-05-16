<x-app-layout>
    <x-slot name="header">
    </x-slot>
    @foreach ($fichiers as $fichier)
        <a target="blank" href="{{ \Storage::asset($fichier->url_fichier)}}">{{$fichier->nom_fichier}}</a>
    @endforeach
</x-app-layout>