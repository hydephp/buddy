<?php

namespace App\Http\Livewire;

use App\Core\Contracts\Buddy;
use Hyde\Framework\Models\BladePage;
use Hyde\Framework\Models\DocumentationPage;
use Hyde\Framework\Models\MarkdownPage;
use Hyde\Framework\Models\MarkdownPost;
use Illuminate\Support\Collection;
use Livewire\Component;
use Desilva\Console\Console;

class ContentExplorer extends Component
{
    public bool $loaded = false;

    protected Buddy $buddy;

    public Collection $pages;

    public function mount(Buddy $buddy)
    {
        $this->buddy = $buddy;
    }

    public function load()
    {
        $time = microtime(true);
        $console = new Console;
        $console->debug('Loading page collections...');

        $this->pages = new Collection();

        $bladePages = BladePage::all();
        $markdownPages = MarkdownPage::all();
        $markdownPosts = MarkdownPost::all();
        $documentationPages = DocumentationPage::all();

        $this->pages->put('bladePages', $bladePages);
        $this->pages->put('markdownPages', $markdownPages);
        $this->pages->put('markdownPosts', $markdownPosts);
        $this->pages->put('documentationPages', $documentationPages);

        $console->debug('Loaded all pages in ' . round(microtime(true) - $time, 2) . ' seconds.');

        $this->loaded = true;
    }

    public function render()
    {
        return view('livewire.content-explorer');
    }
}
