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
		<div class="container row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Project Settings</h3>
					</div>
					<div class="card-body">
						<form action="{{ route('settings.update', '') }}" method="POST">
							@csrf
							@method('PUT')
							<div class="form-group">
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header pb-2">
						<h3 class="card-title">JSON Store</h3>
						<p>
							Your settings are stored in the following JSON file:
							<a href="file://{{ $configuration->getConfigurationFilePath() }}">{{ $configuration->getConfigurationFilePath() }}</a>
						</p>
					</div>
					<div class="card-body pt-0">
                        <textarea class="form-control" name="" id="" cols="30" rows="20" readonly>{{ $configuration->getJson() }}</textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>