<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
           <p>vous êtes connecté en tant que </p> {{ Auth::attempt(['email' => $email, 'password' => $password]) }}
        </h2>
    </x-slot>

    <x-jet-welcome />
</x-app-layout>