<div class="card-header pb-0 p-3 d-flex align-items-center">
	<h6 class="mb-0">Quick Actions</h6>
	<span class="text-sm mt-1 ms-2" id="quickactions-live-link">
		<span class="text-success status-bullet" role="presentation">•</span>
		Your site is live at <a href="http://localhost:8080">
			localhost:8080
		</a>
	</span>
</div>
<div class="card-body p-3 pb-0">
	<menu role="toolbar" wire:poll.30s="ping" class="d-flex list-unstyled mt-0">
		<li>
			<button class="btn btn-primary py-1 px-3 me-2">Create new file</button>
		</li>
		<li>
			<button onclick="window.open('{{ route('api.actions.compile-static-site') }}', 'popup', 'width=800, height=760')" target="popup" class="btn btn-warning py-1 px-3 me-2">
				Compile static site
			</a>
		</li>
		<li wire:init="ping">
			@if($serverActive)
			<style>#quickactions-live-link {display: inline;}</style>
			<button class="btn btn-danger py-1 px-3 me-2" wire:loading.remove></span>
				Stop Server
			</button>
			<button class="btn btn-gray py-1 px-3 me-2" wire:loading disabled>
				Loading status...
			</button>
			<button class="btn btn-secondary py-1 px-3 me-2"></span>
				<span>See Terminal Feed</span>
			</button>
			@else
			<style>#quickactions-live-link {display: none;}</style>
			<a href="{{ route('api.actions.start-hyde-server') }}" target="_blank" class="btn btn-success py-1 px-3 me-2" wire:loading.remove></span>
			   Start Server
			</a>
			<button class="btn btn-gray py-1 px-3 me-2" wire:loading disabled>
				Loading status...
			</button>
			@endif
		</li>
	</menu>
</div>