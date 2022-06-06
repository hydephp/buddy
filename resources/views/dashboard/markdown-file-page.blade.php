<x-app-layout>
    <x-slot name="title">
        {{ config('app.name') }} Markdown File Viewer
    </x-slot>
    
    <div class="col-12 container d-flex flex-column justify-content-center">
        <header class="px-4 py-4 mt-5 text-center">
            <h1 class="text-3xl font-bold">
                Markdown File Viewer
            </h1>
			<p class="text-lg">
				Showing <code>{{ $path }}</code>
			</p>
        </header>

		<section class="card">
			<header class="card-header pb-2 pt-3 bg-light">
				<h4>Markdown Contents</h4>
			</header>
			<div class="card-body p-3 pt-2 markdown-contents bg">
				<pre><code class="language-markdown">{{ $content }}</code></pre>
			</div>

			{{-- TODO load locally instead of CDN --}}
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.5.0/build/styles/default.min.css">
			<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.5.0/build/highlight.min.js"></script>
			<script>hljs.highlightAll();</script>
		</section>
    </div>
</x-app-layout>