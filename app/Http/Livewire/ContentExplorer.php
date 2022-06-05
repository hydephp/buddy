<?php

namespace App\Http\Livewire;

use App\Core\Contracts\Buddy;
use Hyde\Framework\Models\BladePage;
use Hyde\Framework\Models\DocumentationPage;
use Hyde\Framework\Models\MarkdownPage;
use Hyde\Framework\Models\MarkdownPost;
use Hyde\Framework\Services\CollectionService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use Desilva\Console\Console;

class ContentExplorer extends Component
{
    public bool $loaded = false;

    protected Buddy $buddy;

    protected $cacheKey;

    public Collection $pages;

    public function mount(Buddy $buddy)
    {
        $this->buddy = $buddy;
        $this->cacheKey = 'content-explorer-'.$this->getContentHash();

        // If a cache exists we don't need to lazy load it
        if (Cache::has($this->cacheKey)) {
            $this->load();
        }
    }

    public function load()
    {
        if ($this->loaded) {
            return;
        }

        $time = microtime(true);
        $console = new Console;
        $console->debug('Loading page collections...');

        $hash = $this->getContentHash();

        if (Cache::has($this->cacheKey)) {
            $this->pages = Cache::get($this->cacheKey);
            $console->debug('Loaded page collections from cache in '
                . round((microtime(true) - $time) * 1000, 2) . 'ms.');
            $this->loaded = true;
            return;
        }

        $this->pages = new Collection();

        $this->pages->put('bladePages', BladePage::all());
        $this->pages->put('markdownPages', MarkdownPage::all());
        $this->pages->put('markdownPosts', MarkdownPost::all());
        $this->pages->put('documentationPages', DocumentationPage::all());

        Cache::put('content-explorer-' . $hash, $this->pages, now()->addMinutes(5));
        $console->debug('Loaded all pages in ' . round((microtime(true) - $time) * 1000, 2) . 'ms.');

        $this->loaded = true;
    }

    public function render()
    {
        return view('livewire.content-explorer');
    }

    protected function getContentHash(): string
    {
        return md5(implode('', array_merge([
            implode('', CollectionService::getBladePageList()),
            implode('', CollectionService::getMarkdownPageList()),
            implode('', CollectionService::getMarkdownPostList()),
            implode('', CollectionService::getDocumentationPageList()),
        ])));
    }
}
