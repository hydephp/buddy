<?php

namespace App\Http\Livewire;

use Hyde\Framework\Models\MarkdownPost;
use Livewire\Component;

class BlogPostManager extends Component
{
    public MarkdownPost|array $post;

    public function mount(MarkdownPost $post)
    {
        $this->post = (array) $post;
    }

    public function render()
    {
        return view('livewire.blog-post-manager');
    }
}
