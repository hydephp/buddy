<div>
    @if (count($pages) > 0)
        <table class="table table-bordered table-padding-1">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>File name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $type => $subpages)
                    @foreach ($subpages as $page)
                    <tr>
                        <td>{{ $pageNames[$type] }}</td>
                        <td>{{ $page }}.{{ $type === 'bladePage' ? 'blade.php' : 'md' }}</td>
                        <td>
                            <a href="#not-yet-implemented">View</a>
                            <a href="#not-yet-implemented">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    @else
        <p>No files found.</p>
    @endif
</div>