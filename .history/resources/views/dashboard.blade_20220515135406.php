<x-app-layout>
    <x-slot name="header">
    </x-slot>
    @foreach ($fichiers as $fichier)
<div class="fichier_recup"></div>
    @endforeach
</x-app-layout>