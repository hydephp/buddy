<x-app-layout>
    <x-slot name="title">
        {{ config('app.name') }} Dashboard
    </x-slot>
    
    <header class="px-4 py-4 my-5 text-center">
        <h1 class="text-3xl font-bold">
            {{ config('app.name') }} Dashboard
        </h1>
    </header>
</x-app-layout>