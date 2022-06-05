<div wire:init="load">
    @if($loaded)
        <div>
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
                @if(count($pages->get('markdownPages')) > 0)
                    <table>
                        @dump($pages->get('markdownPages'))
                    </table>
                @else
                    <p>No Markdown Pages Found</p>
                @endif
            </section>
            <section>
                <h6>Markdown Blog Posts</h6>
                @if(count($pages->get('markdownPosts')) > 0)
                    <table>
                        @dump($pages->get('markdownPosts'))
                    </table>
                @else
                    <p>No Markdown Posts Found</p>
                @endif
            </section>
            <section>
                <h6>Documentation Pages</h6>
                @if(count($pages->get('documentationPages')) > 0)
                    <table>
                        @dump($pages->get('documentationPages'))
                    </table>
                @else
                    <p>No Documentation Pages Found</p>
                @endif
            </section>
        </div>
    @else
        <h5 wire:loading>Loading...</h5>
    @endif
</div>
