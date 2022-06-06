<x-app-layout>
    <x-slot name="title">
        {{ config('app.name') }} Markdown File Viewer
    </x-slot>
    
    <div class="col-xxl-10">
        <header class="px-4 py-4 mt-5 text-center">
            <h1 class="text-3xl font-bold">
                Markdown File Viewer
            </h1>
			<p class="text-lg">
				Showing <code>{{ $path }}</code>
			</p>
        </header>
    </div>
</x-app-layout>