<div>
    <style>
        .ptc1 {
            width: 1%;
        }
    </style>
    @if (count($pages) > 0)
        <table class="table table-bordered table-padding-1">
            <thead>
                <tr>
                    <th class="ptc1">Type</th>
                    <th>File name</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $type => $subpages)
                    @foreach ($subpages as $page)
                    <tr>
                        <td class="ptc1">{{ $pageNames[$type] }}</td>
                        <td>{{ $page }}.{{ $type === 'bladePage' ? 'blade.php' : 'md' }}</td>
                        <td class="text-end">
                            <a class="mx-2" href="#not-yet-implemented">View</a>
                            <a class="mx-2" href="#not-yet-implemented">Edit</a>
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