<x-app-layout>
    <x-slot name="title">
        {{ config('app.name') }} Manage Blog Post
    </x-slot>
    
    <div class="col-xxl-10">
        <header class="px-4 py-4 mt-5 text-center">
            <h1 class="text-3xl font-bold">
                Manage Blog Post
            </h1>
            <h2 class="h4 mt-4">
                {{ $post->title }}
            </h2>
        </header>
    
        <div class="col-12 mx-auto p-3 mb-5">
            <livewire:blog-post-manager :post="$post" />
        </div>
    </div>
</x-app-layout>