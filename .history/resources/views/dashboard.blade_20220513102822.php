<x-app-layout>
    <x-slot name="header">
    </x-slot>
    @foreach ($collection as $item)
        <a href="{{ storage::url(fichiers->url_fichier)}}">{{}}</a>
    @endforeach
</x-app-layout>