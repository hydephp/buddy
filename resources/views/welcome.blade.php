<x-app-layout>
    <x-slot name="title">
        Welcome to {{ config('app.name') }}
    </x-slot>
    
    <header class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1>
                Welcome to {{ config('app.name') }}!
            </h1>
        </div>
    </header>
</x-app-layout>