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
                    <h6 class="mb-0">HydeCLI Terminal Preview</h6>
                    <button class="btn btn-icon-only shadow-none mb-0" title="Open in fullscreen">
                        <svg class="btn-inner--icon " xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/></svg>
                    </button>
                </div>
                <div class="card-body p-3">
                    <livewire:terminal />
                </div>
                <small class="ps-3 pb-3">
                    The Terminal Preview currently only proxies commands and returns the output.
                    It does not work with interactive commands.
                    <br>Fullscreen mode not yet implemented.
                </small>
            </div>
        </section>
    </div>
    
</x-app-layout>