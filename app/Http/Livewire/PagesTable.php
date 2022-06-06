<?php

namespace App\Http\Livewire;

use Hyde\Framework\Services\CollectionService;
use Livewire\Component;

/**
 * Replaces the ContentExplorer which is rather buggy due to Livewire not supporting non-standard objects/arrays.
 */
class PagesTable extends Component
{
    public function render()
    {
        return view('livewire.pages-table', [
            'pages' => array_merge([
                'bladePages' => CollectionService::getBladePageList(),
                'markdownPages' => CollectionService::getMarkdownPageList(),
                'markdownPosts' => CollectionService::getMarkdownPostList(),
                'documentationPages' => CollectionService::getDocumentationPageList(),
            ]),
            'pageNames' => [
                'bladePages' => 'Blade Pages',
                'markdownPages' => 'Markdown Pages',
                'markdownPosts' => 'Markdown Posts',
                'documentationPages' => 'Documentation Pages',
            ]
        ]);
    }
}
