<x-app-layout>
    <x-slot name="title">
        {{ config('app.name') }} Live Site
    </x-slot>
    
    <header class="px-4 py-4 mt-5 text-center">
        <h1 class="text-3xl font-bold">
            Browse your Hyde Site
        </h1>
		<p class="lead">
			Site not loading? Head on over to the main dashboard and start the server!
		</p>
    </header>

	<div class="col-12 mx-auto p-3 mb-5">
		<div class="container">
			<iframe src="http://localhost:8080/" class="col-12" style="min-height: 75vh;"></iframe>		
		</div>
	</div>
</x-app-layout>