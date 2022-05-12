<div wire:init="load">
    <h5 wire:loading>Loading...</h5>
    <dl wire:loading.attr="hidden">
        @foreach($details as $key => $value)
            <dt class="mb-0 text-dark text-sm">{{ $key }}</dt>
            <dd class="text-sm">{{ $value }}</dd>
        @endforeach
    </ul>
</div>