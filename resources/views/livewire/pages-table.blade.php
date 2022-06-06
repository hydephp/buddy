<div>
    @if (count($pages) > 0)
    @php
        // Find the array key with the most items
        $max = max(array_map('count', $pages));
    @endphp
        <table class="table table-bordered table-padding-1">
            
            <thead class="table-dark">
                <tr>
                    <th>Blade Pages <small class="opacity-75">({{ count($pages['bladePages']) }})</small></th>
                    <th>Markdown Pages <small class="opacity-75">({{ count($pages['markdownPages']) }})</small></th>
                    <th>Markdown Posts <small class="opacity-75">({{ count($pages['markdownPosts']) }})</small></th>
                    <th>Documentation Pages <small class="opacity-75">({{ count($pages['documentationPages']) }})</small></th>
                </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < $max; $i++)
                <tr>
                    <td>{{ $pages['bladePages'][$i] ?? ''}}</td>
                    <td>{{ $pages['markdownPages'][$i] ?? ''}}</td>
                    <td>{{ $pages['markdownPosts'][$i] ?? ''}}</td>
                    <td>{{ $pages['documentationPages'][$i] ?? ''}}</td>
                </tr>
            @endfor
            </tbody>
        </table>
    @else
        <p>No files found.</p>
    @endif
</div>