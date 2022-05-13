<x-app-layout>
    <x-slot name="title">
        {{ config('app.name') }} Settings
    </x-slot>
    
    <header class="px-4 py-4 mt-5 text-center">
        <h1 class="text-3xl font-bold">
            Manage Project and Buddy Settings
        </h1>

    </header>

	<div class="col-12 mx-auto p-3 mb-5">
		@dump($configuration)
	</div>
</x-app-layout>