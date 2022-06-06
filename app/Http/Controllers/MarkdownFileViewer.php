<?php

namespace App\Http\Controllers;

use Hyde\Framework\Hyde;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

    public function save(string $directory, string $file, Request $request)
    {
        $path = $directory .'/'. $file;
        abort_unless(file_exists(Hyde::path($path)), 404);

        $content = $request->input('content');

        $validator = \Validator::make([
            'content' => $content,
        ], [
            'content' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        file_put_contents(Hyde::path($path), $content);

        $request->session()->flash('successBanner', 'File saved successfully!');

        return redirect()->route('markdown-file.show', [
            'directory' => $directory,
            'file' => $file,
        ]);
    }

    public function html(string $directory, string $file)
    {
        $path = $directory .'/'. $file;
        abort_unless(file_exists(Hyde::path($path)), 404);

        $content = file_get_contents(Hyde::path($path));

        return Str::markdown((YamlFrontMatter::markdownCompatibleParse($content)->body()));
    }
}
