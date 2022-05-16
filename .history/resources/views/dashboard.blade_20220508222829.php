<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
           <p>vous êtes connecté en tant que </p> {{ Aut }}
        </h2>
    </x-slot>

    <x-jet-welcome />
</x-app-layout>