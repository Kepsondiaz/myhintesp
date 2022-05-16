<x-app-layout>
    <x-slot name="header">
    </x-slot>
    @foreach ($collection as $item)
        <a href="{{ storrage}}"></a>
    @endforeach
</x-app-layout>