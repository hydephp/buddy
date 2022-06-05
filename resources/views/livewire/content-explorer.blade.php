<div wire:init="load">
    <blockquote class="alert alert-warning">
        @todo: handle data assembly in controller
    </blockquote>
    @if($loaded)
        <div>
            <style>
                .table tbody tr:last-child td {
                    border-width: 0 1px 1px 1px;
                }
            </style>
            <section>
                <h6>Blade Pages</h6>
                @php($bladePages = collect($pages->get('bladePages')))
                @if($bladePages->count() > 0)
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>View Name</th>
                                <th>Slug</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bladePages as  $bladePage)
                                @php($bladePage = (object) $bladePage)
                                <tr>
                                    <td>{{ $bladePage->view }}</td>
                                    <td>{{ $bladePage->slug }}</td>
                                    <td><a href="/_site/{{ $bladePage->slug }}">See live page</a><sup>NYI</sup></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No Blade Pages Found</p>
                @endif
            </section>
            <section>
                <h6>Markdown Pages</h6>
                @php($markdownPages = collect($pages->get('markdownPages')))
                @if($markdownPages->count() > 0)
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Page Title</th>
                                <th>Slug</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($markdownPages as  $markdownPage)
                                @php($markdownPage = (object) $markdownPage)
                                <tr>
                                    <td>{{ $markdownPage->title }}</td>
                                    <td>{{ $markdownPage->slug }}</td>
                                    <td>
                                        <a class="btn btn-link btn-xs mb-0" href="/_site/{{ $markdownPage->slug }}">See live page<sup>NYI</sup></a>
                                        <a class="btn btn-link btn-xs mb-0" href="/app/markdown-editor?page={{ urlencode('_pages/'.$markdownPage->slug.'.md') }}">Edit markdown<sup>NYI</sup></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No Markdown Pages Found</p>
                @endif
            </section>
            <section>
                <h6>Markdown Blog Posts</h6>
                @php($markdownPosts = collect($pages->get('markdownPosts')))
                @if($markdownPosts->count() > 0)
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Post Title</th>
                                <th>Author</th>
                                <th>Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($markdownPosts as  $markdownPost)
                                @php($markdownPost = (object) $markdownPost)
                                <tr>
                                    <td>
                                        @php($markdownPost->date = (object) $markdownPost->date)
                                        {{ $markdownPost->date->short }}
                                    </td>
                                    <td>
                                        <a href="{{ route('posts.show', $markdownPost->slug) }}">
                                            {{ $markdownPost->title }}
                                        </a>
                                    </td>
                                    <td>
                                        @php($markdownPost->author = (object) $markdownPost->author)
                                        {{ $markdownPost->author->name ?? $markdownPost->author->username  }}
                                    </td>
                                    <td>{{ $markdownPost->category }}</td>
                       
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No Markdown Posts Found</p>
                @endif
            </section>
            <section>
                <h6>Documentation Pages</h6>
                @php($documentationPages = collect($pages->get('documentationPages')))
                @if($documentationPages->count() > 0)
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Priority</th>
                                <th scope="col">Label</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Category</th>
                                <th scope="col">Hidden</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($documentationPages as $documentationPage)
                                @php($documentationPage = (object) $documentationPage)
                                <tr>
                                    <td>{{ $documentationPage->priority }}</td>
                                    <td><a href="../docs/{{ $documentationPage->destination }}">{{ $documentationPage->label }}</a></td>
                                    <td>{{ $documentationPage->destination }}</td>
                                    <td>{{ $documentationPage->category }}</td>
                                    <td>
                                        @if ($documentationPage->hidden)
                                            <span style="color: darkred;">true</span>
                                        @else
                                            <span style="opacity: 0.75;">false</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
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
