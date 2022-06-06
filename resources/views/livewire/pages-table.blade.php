<div>
    @if (count($pages) > 0)
    @php
        // Find the array key with the most items
        $max = max(array_map('count', $pages));
    @endphp
        <table class="table table-bordered table-padding-1">
            
            <thead class="table-dark">
                <tr>
                    <th>Blade Pages</th>
                    <th>Markdown Pages</th>
                    <th>Markdown Posts</th>
                    <th>Documentation Pages</th>
                </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < $max; $i++)
                <tr>
                    <td>{{ isset($pages['bladePages'][$i]) ? $pages['bladePages'][$i].'.blade.php' : '' }}</td>
                    <td>{{ isset($pages['markdownPages'][$i]) ? $pages['markdownPages'][$i].'.md' : '' }}</td>
                    <td>{{ isset($pages['markdownPosts'][$i]) ? $pages['markdownPosts'][$i].'.md' : '' }}</td>
                    <td>{{ isset($pages['documentationPages'][$i]) ? $pages['documentationPages'][$i].'.md' : '' }}</td>
                </tr>
            @endfor
            </tbody>
        </table>
    @else
        <p>No files found.</p>
    @endif
</div>