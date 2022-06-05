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

    /** @var Collection<\Hyde\Framework\Models\BladePage */
    public Collection $bladePages;

    /** @var Collection<\Hyde\Framework\Models\MarkdownPage */
    public Collection $markdownPages;

    /** @var Collection<\Hyde\Framework\Models\MarkdownPost */
    public Collection $markdownPosts;

    /** @var Collection<\Hyde\Framework\Models\DocumentationPage */
    public Collection $documentationPages;

    public function mount(Buddy $buddy)
    {
        $this->buddy = $buddy;
    }

    public function load()
    {
        $time = microtime(true);
        $console = new Console;
        $console->debug('Loading page collections...');

        $this->bladePages = BladePage::all();
        $this->markdownPages = MarkdownPage::all();
        $this->markdownPosts = MarkdownPost::all();
        $this->documentationPages = DocumentationPage::all();

        $console->debug('Loaded all pages in ' . round(microtime(true) - $time, 2) . ' seconds.');

        $this->loaded = true;
    }

    public function render()
    {
        return view('livewire.content-explorer');
    }
}
