<div>
    @if (count($pages) > 0)
    @php
        // Find the array key with the most items
        $max = max(array_map('count', $pages));

        // Sort the array by amount of items
        arsort($pages);
    @endphp
        <table class="table table-bordered table-padding-1">
            <thead class="table-dark">
                <tr>
                    @foreach ($pages as $type => $page)
                    <th>{{ ucwords(str_replace('P', ' P', $type)) }} <small class="opacity-75">({{ count($page) }})</small></th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < $max; $i++)
                <tr>
                    @foreach ($pages as $type => $page)
                    <td>{{ $page[$i] ?? ''}}</td>
                    @endforeach
                </tr>
            @endfor
            </tbody>
        </table>
    @else
        <p>No files found.</p>
    @endif
</div>