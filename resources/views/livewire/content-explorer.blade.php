<div wire:init="load">
    <h5 wire:loading>Loading...</h5>
    @if($loaded)
        <div wire:loading.attr="hidden">
            @dump($pages)
            <section>
                <h6>Blade Pages</h6>
                @if($pages->get('bladePages')->count() > 0)
                    <table>
                        @dump($pages->get('bladePages'))
                    </table>
                @else
                    <p>No Blade Pages Found</p>
                @endif
            </section>
            <section>
                <h6>Markdown Pages</h6>
                @if($pages->get('markdownPages')->count() > 0)
                    <table>
                        @dump($pages->get('markdownPages'))
                    </table>
                @else
                    <p>No Markdown Pages Found</p>
                @endif
            </section>
            <section>
                <h6>Markdown Blog Posts</h6>
                @if($pages->get('markdownPosts')->count() > 0)
                    <table>
                        @dump($pages->get('markdownPosts'))
                    </table>
                @else
                    <p>No Markdown Posts Found</p>
                @endif
            </section>
            <section>
                <h6>Documentation Pages</h6>
                @if($pages->get('documentationPages')->count() > 0)
                    <table>
                        @dump($pages->get('documentationPages'))
                    </table>
                @else
                    <p>No Documentation Pages Found</p>
                @endif
            </section>
        </div>
    @endif
</div>
