<dl>
    @foreach($details as $key => $value)
        <dt class="mb-0 text-dark text-sm">{{ $key }}</dt>
        <dd class="text-sm">{{ $value }}</dd>
    @endforeach
</ul>