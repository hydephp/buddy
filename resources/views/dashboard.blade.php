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
    
    <div class="d-flex justify-content-center">
        <section class="col-lg-5">
            <div class="card">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Hyde Installation Details</h6>
                </div>
                <div class="card-body p-3">
                    <x-hyde-installation-details />
                </div>
            </div>
        </section>
    </div>
    
</x-app-layout>