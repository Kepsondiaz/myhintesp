<x-app-layout>
    <x-slot name="header">
    </x-slot>
    @foreach ($fichiers as $fichier)
.fichier_
    @endforeach
</x-app-layout>