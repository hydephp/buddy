<x-app-layout>
    <x-slot name="title">
        {{ config('app.name') }} Dashboard
    </x-slot>
    
    <header class="px-4 py-4 my-5 text-center">
        <h1 class="text-3xl font-bold">
            {{ config('app.name') }} Dashboard
        </h1>
        
        <p class="text-xl text-gray-600">
            Welcome to your dashboard. Here you can easily manage your Hyde project.
        </p>
    </header>
    
    <div class="d-flex flex-wrap justify-content-center">
        <section class="col-lg-4 m-4">
            <div class="card">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Hyde Installation Details</h6>
                </div>
                <div class="card-body p-3">
                    <x-hyde-installation-details />
                </div>
            </div>
        </section>

        <section class="col-lg-6 m-4">
            <div class="card">
                <div class="card-header pb-0 p-3 d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Content Explorer</h5>
                </div>
                <div class="card-body p-3">
                    <livewire:content-explorer />
                </div>
            </div>
        </section>
    </div>
    
</x-app-layout>