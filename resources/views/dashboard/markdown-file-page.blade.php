<x-app-layout>
    <x-slot name="title">
        {{ config('app.name') }} Markdown File Viewer
    </x-slot>
    
    <div class="col-12 mb-6 container d-flex flex-column justify-content-center">
        <header class="px-4 py-4 mt-5 text-center">
            <h1 class="text-3xl font-bold">
                Markdown File Viewer
            </h1>
			<p class="text-lg">
				Showing <code>{{ $path }}</code>
			</p>
        </header>

		<section class="col-12 col-xxl-10 mx-auto card">
			<header class="card-header pb-2 pt-3 bg-light d-flex align-items-center justify-content-between">
				<h4 id="tab-title">Markdown Contents</h4>
				<button id="toggle-tab-button" onclick="toggleTab()" class="btn btn-xs btn-primary mb-2" title="Shortcut: `e`">Edit</button>
			</header>
			<div id="tabs" class="card-body p-3 markdown-contents tab-one">
				<div id="tab-one">
					<pre><code class="language-markdown">{{ $content }}</code></pre>
				</div>
				<div id="tab-two">
					<form class="py-2" action="update" method="POST">
						@csrf
						<div class="col-12 mb-3">
							<textarea class="form-control" name="content" id="content" cols="30" rows="30">{{ $content }}</textarea>
						</div>
						<div class="col-12 text-end">
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
					</form>
				</div>
			</div>

			{{-- TODO load locally instead of CDN --}}
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.5.0/build/styles/default.min.css">
			<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.5.0/build/highlight.min.js"></script>
			<script>hljs.highlightAll();</script>
		</section>
    </div>

	<style>
		#tabs.tab-one #tab-one {
			display: block;
		}
		#tabs.tab-one #tab-two {
			display: none;
		}

		#tabs.tab-two #tab-one {
			display: none;
		}
		#tabs.tab-two #tab-two {
			display: block;
		}
		#tab-one pre {
			max-height: 600px;
			overflow-y: auto;
			margin-bottom: 0;
		}
		#tab-two textarea {
			max-height: 500px;
		}
	</style>

	<script>
		const tabContainer = document.getElementById('tabs');
		const tabTitle = document.getElementById('tab-title');
		const toggleTabButton = document.getElementById('toggle-tab-button');
		function toggleTab() {
			function isOnFirstTab () {
				return tabContainer.classList.contains('tab-one');
			}
			if (isOnFirstTab()) {
				tabContainer.classList.remove('tab-one');
				tabContainer.classList.add('tab-two');
				tabTitle.innerText = 'Markdown Editor';
				toggleTabButton.innerText = 'View Contents';
			} else {
				tabContainer.classList.remove('tab-two');
				tabContainer.classList.add('tab-one');
				tabTitle.innerText = 'Markdown Contents';
				toggleTabButton.innerText = 'Edit';
			}
		}

		// Register event listener for keyboard press e
		document.addEventListener('keydown', function (e) {
			if (e.key === 'e') {
				// Check that focus is not in an input
				if (document.activeElement.tagName !== 'INPUT' && document.activeElement.tagName !== 'TEXTAREA') {
					toggleTab();
				}
			}
		});
	</script>
</x-app-layout>