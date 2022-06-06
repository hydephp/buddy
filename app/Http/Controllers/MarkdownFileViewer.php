<?php

namespace App\Http\Controllers;

use Hyde\Framework\Hyde;
use Illuminate\Http\Request;

class MarkdownFileViewer extends Controller
{
    public function show(string $directory, string $file, Request $request)
    {
        $path = $directory .'/'. $file;
        abort_unless(file_exists(Hyde::path($path)), 404);

        $content = file_get_contents(Hyde::path($path));

        return view('dashboard.markdown-file-page', [
            'content' => $content,
            'path' => $path,
            'directory' => $directory,
            'filename' => $file,
        ]);
    }
}
