<div>
    @if (count($pages) > 0)
        <table class="table table-bordered table-padding-1">
            <thead class="table-dark">
                <tr>
                    <th colspan="3">Blade Pages</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages['bladePages'] as $page)
                    <tr>
                        <th>{{ Hyde\Framework\Hyde::titleFromSlug($page) }}</th>
                        <td>{{ $page }}.blade.php</td>
                        <td class="text-end">
                            <a class="mx-2" href="#not-yet-implemented">View</a>
                            <a class="mx-2" href="#not-yet-implemented">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <thead class="table-dark">
                <tr>
                    <th colspan="3">Markdown Pages</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages['markdownPages'] as $page)
                    <tr>
                        <th>{{ Hyde\Framework\Hyde::titleFromSlug($page) }}</th>
                        <td>{{ $page }}.md</td>
                        <td class="text-end">
                            <a class="mx-2" href="#not-yet-implemented">View</a>
                            <a class="mx-2" href="#not-yet-implemented">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>     
            <thead class="table-dark">
                <tr>
                    <th colspan="3">Markdown Posts</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages['markdownPosts'] as $page)
                    <tr>
                        <th>{{ Hyde\Framework\Hyde::titleFromSlug($page) }}</th>
                        <td>{{ $page }}.md</td>
                        <td class="text-end">
                            <a class="mx-2" href="#not-yet-implemented">View</a>
                            <a class="mx-2" href="#not-yet-implemented">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <thead class="table-dark">
                <tr>
                    <th colspan="3">Documentation Pages</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages['documentationPages'] as $page)
                    <tr>
                        <th>{{ Hyde\Framework\Hyde::titleFromSlug($page) }}</th>
                        <td>{{ $page }}.md</td>
                        <td class="text-end">
                            <a class="mx-2" href="#not-yet-implemented">View</a>
                            <a class="mx-2" href="#not-yet-implemented">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No files found.</p>
    @endif
</div>