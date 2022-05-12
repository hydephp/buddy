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
        <button class="btn btn-danger py-1 px-3 me-2" wire:loading.attr="disabled"></span>
            <span wire:loading.remove>Stop Server</span>
            <span wire:loading>Loading status...</span>
        </button>
        @else
        <style>#quickactions-live-link {display: none;}</style>
        <button class="btn btn-success py-1 px-3 me-2" wire:loading.attr="disabled"></span>
            <span wire:loading.remove>Start Server</span>
            <span wire:loading>Loading status...</span>
        </button>
        @endif
    </li>
</menu>