<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <table class="table">
        <thead class="thead-primary">
            <tr>
                <th scope="col">Nom du fichier</th>
                <th scope="col">Cours</th>
                <th scope="col">Semestres</th>
                <th scope="col">Taille(ko)</th>
                <th scope="col">Téléchagement</th>
              </tr>
        </thead>
        <tbody>

        @if()
            
        @endif
    </tbody>
    </table>
    <span>{{ $fichiers_search->links()}}</span> 
</x-app-layout>
