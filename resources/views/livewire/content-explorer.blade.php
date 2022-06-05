<div wire:init="load">
    @if($loaded)
        <div>
            <section>
                <h6>Blade Pages</h6>
                @php($bladePages = collect($pages->get('bladePages')))
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
                @php($markdownPages = collect($pages->get('markdownPages')))
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
                @php($markdownPosts = collect($pages->get('markdownPosts')))
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
                @php($documentationPages = collect($pages->get('documentationPages')))
                @if($documentationPages->count() > 0)
                    <table>
                        @dump($documentationPages)
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
