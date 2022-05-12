<menu role="toolbar" wire:poll.30s="ping" class="d-flex list-unstyled mt-0">
    <li>
        <button class="btn btn-primary py-1 px-3 me-2">Create new file</button>
    </li>
    <li>
        <button class="btn btn-warning py-1 px-3 me-2">Compile static site</button>
    </li>
    <li wire:loaded="ping">
        @if($serverActive)
        <a href="http://localhost:8080" target="_blank" class="btn btn-success py-1 px-3 me-2">
            Open Hyde Site
        </a>
        @else
        <button class="btn btn-success py-1 px-3 me-2" disabled>
            <span wire:loading>Checking Status</span>
            <span wire:loading.remove >Server Offline</span>
        </button>
        @endif
    </li>
</menu>