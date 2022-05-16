<x-app-layout>
    <x-slot name="header">
    </x-slot>
    @foreach ($collection as $item)
        <a href="{{ storage::url(fichiers->url_fichier)}}">{{fichie}}</a>
    @endforeach
</x-app-layout>