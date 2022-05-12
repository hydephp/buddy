<x-app-layout>
    <x-slot name="title">
        {{ config('app.name') }} Terminal
    </x-slot>
    
    <header class="px-4 py-4 my-5 text-center">
        <h1 class="text-3xl font-bold">
            HydeCLI Terminal Preview
        </h1>
        
        <p class=" text-gray-600">
			The Terminal Preview currently only proxies commands and returns the output.
			It does not work with interactive commands.
		</p>
    </header>

	<div class="col-xl-8 mx-auto p-3">
		<livewire:terminal />
	</div>
</x-app-layout>