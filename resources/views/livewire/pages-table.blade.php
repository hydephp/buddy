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
                    @if(isset($pages['bladePages'][$i]))
                    <td>{{ $pages['bladePages'][$i] }}.blade.php</td>
                    @else
                    <td></td>
                    @endif
                    @if(isset($pages['markdownPages'][$i]))
                    <td>{{ $pages['markdownPages'][$i] }}.md</td>
                    @else
                    <td></td>
                    @endif
                    @if(isset($pages['markdownPosts'][$i]))
                    <td>{{ $pages['markdownPosts'][$i] }}.md</td>
                    @else
                    <td></td>
                    @endif
                    @if(isset($pages['documentationPages'][$i]))
                    <td>{{ $pages['documentationPages'][$i] }}.md</td>
                    @else
                    <td></td>
                    @endif
                </tr>
            @endfor
            </tbody>
        </table>
    @else
        <p>No files found.</p>
    @endif
</div>