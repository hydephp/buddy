<div wire:init="load">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-dark text-sm fw-medium p-2 border">
                    Project Directory
                </th>
                <th class="text-dark text-sm fw-medium p-2 border">
                    Hyde Version
                </th>
                <th class="text-dark text-sm fw-medium p-2 border">
                    Framework Version
                </th>
                <th class="text-dark text-sm fw-medium p-2 border">
                    PHP Version
                </th>
                <th class="text-dark text-sm fw-medium p-2 border">
                    HydeRC Status
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-sm p-2 border">
                    {{ $details['Project Directory'] ?? 'Loading...' }}
                </th>
                <td class="text-sm p-2 border">
                    {{ $details['Hyde Version'] ?? 'Loading...' }}
                </th>
                <td class="text-sm p-2 border">
                    {{ $details['Framework Version'] ?? 'Loading...' }}
                </th>
                <td class="text-sm p-2 border">
                    {{ $details['PHP Version'] ?? 'Loading...' }}
                </th>
             
                <td class="text-sm p-2 border">
                    
                </td>
            </tr>
        </tbody>
    </table>
</div>