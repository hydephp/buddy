<div wire:init="ping" wire:poll.30s>
    <div wire:loading>
        Pinging...
    </div>
    <div wire:loading.attr="hidden">
        @if($loaded)
            @switch($status)
                @case(0)
                    <span title="Could not connect to the server.">
                        Server Offline
                    </span>    
                    <span class="text-gray fw-bold" role="presentation">&bullet;</span>
                    @break
                @case(200)
                    <a href="http://localhost:8080" target="_blank" class="fw-medium text-success">
                        Server Online
                    </a>
                    <span class="text-success fw-bold" role="presentation">&bullet;</span>
                    @break
                @default
                    
                Unexpected response {{ $status }}
            @endswitch
        @else
            Pinging...
        @endif
    </div>
</div>
