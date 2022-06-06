<div>
    @if (count($pages) > 0)
    @php
        // Find the array key with the most items
        $max = max(array_map('count', $pages));

        // Sort the array by amount of items
        arsort($pages);

        // Create a lookup table for the path locations
        // Buddy does not support custom content directories at this point in time
        $paths = [
            'bladePages' => '_pages',
            'markdownPages' => '_pages',
            'markdownPosts' => '_posts',
            'documentationPages' => '_docs',
        ]
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
                    <td>
                        @if (isset($page[$i]))
                            @if ($type === 'bladePages')
                            {{-- // Not yet impmemented --}}
                            {{ $page[$i] }}
                            @else
                            <a href="{{ route('markdown-file.show', [
                                $paths[$type], $page[$i] . '.md'
                            ]) }}">{{ $page[$i] }}</a>
                            @endif
                        @endif
                    </td>
                    @endforeach
                </tr>
            @endfor
            </tbody>
        </table>
    @else
        <p>No files found.</p>
    @endif
</div>