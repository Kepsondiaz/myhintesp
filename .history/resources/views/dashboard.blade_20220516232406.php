<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nom fichier</th>
                <th scope="col">Uploader par</th>
                <th scope="col">Taille</th>
                <th scope="col">Date d'upload</th>
                <th scope="col">Téléchagement</th>
              </tr>
        </thead>
        <tbody>

        
            @foreach ($fichiers as $fichier)
kck
            @endforeach
        </tbody>
    </table>
</x-app-layout>