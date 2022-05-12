<div wire:init="load">
    <h5 wire:loading>Loading...</h5>
    <dl wire:loading.attr="hidden" class="d-flex">
        @foreach($details as $key => $value)
           <div class="pe-5">
                <dt class="mb-0 text-dark text-sm">{{ $key }}</dt>
                <dd class="text-sm">{{ $value }}</dd>
           </div>
        @endforeach
    </ul>
</div>