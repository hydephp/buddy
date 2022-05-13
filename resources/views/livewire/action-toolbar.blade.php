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