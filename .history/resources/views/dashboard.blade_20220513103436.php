<x-app-layout>
    <x-slot name="header">
    </x-slot>
    @foreach ($fichiers as $fichier)
        <a href="{{ storage::url($->url_fichier)}}"></a>
    @endforeach
</x-app-layout>