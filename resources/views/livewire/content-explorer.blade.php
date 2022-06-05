<div wire:init="load">
    <h5 wire:loading>Loading...</h5>
    @if($loaded)
        <div wire:loading.attr="hidden">
            <section>
                <h6>Blade Pages</h6>
                @if($bladePages->count() > 0)
                    <table>
                        @dump($bladePages)
                    </table>
                @else
                    <p>No Blade Pages Found</p>
                @endif
            </section>
            <section>
                <h6>Markdown Pages</h6>
                @if($markdownPages->count() > 0)
                    <table>
                        @dump($markdownPages)
                    </table>
                @else
                    <p>No Markdown Pages Found</p>
                @endif
            </section>
            <section>
                <h6>Markdown Blog Posts</h6>
                @if($markdownPosts->count() > 0)
                    <table>
                        @dump($markdownPosts)
                    </table>
                @else
                    <p>No Markdown Posts Found</p>
                @endif
            </section>
            <section>
                <h6>Documentation Pages</h6>
                @if($documentationPages->count() > 0)
                    <table>
                        @dump($documentationPages)
                    </table>
                @else
                    <p>No Documentation Pages Found</p>
                @endif
            </section>
        </div>
    @endif
</div>
