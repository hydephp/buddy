<x-app-layout>
    <x-slot name="title">
        {{ config('app.name') }} Manage Blog Post
    </x-slot>
    
    <div class="col-xxl-10">
        <header class="px-4 py-4 mt-5 text-center">
            <h1 class="text-3xl font-bold">
                Manage Blog Post
            </h1>
        </header>
    
        <style>
            dd {
                margin-left: 1rem;
                font-size: 0.875rem;
                color: #333;
            }
            dt {
                color: #333;
                font-weight: medium;
            }
            details > dl {
                margin-left: 1rem;
            }
            details > dl > dd {
                margin-bottom: 0;
            }
            dl > dd > dl {
                margin-bottom: 0;
            }
            dl > dd > dl > dd {
                margin-bottom: 0.25rem;
            }
        </style>

        <div class="col-12 mx-auto p-3 mb-5">
            <section class="card row d-flex flex-row col-12 mx-auto">
                <header class="card-header pb-0">
                    <h4 class="card-title">
                        {{ $post->title }}
                    </h4>
                </header>
                <article class="card-body col-7">
                    <div class="mb-3">
                        <h5 class="d-inline pe-2">Post Body</h5> Currently read-only
                    </div>
                    <div class="">
                        <textarea class="form-control" name="" id="" cols="30" rows="30" readonly>{{ $post->body }}</textarea>
                    </div>
                </article>
                <aside class="card-body col-4 mx-auto">
                    <div class="mb-3">
                        <h5 class="d-inline pe-2">Post Metadata</h5>
        
                        <dl class="mt-3">
                            <dt>
                                General
                            </dt>
                            <dd>
                                @isset($post->date)
                                <dl>
                                    <dt>Date:</dt>
                                    <dd>{{ $post->date->sentence }}</dd>
                                </dl>
                                @endisset
                                @isset($post->category)
                                <dl>
                                    <dt>Category:</dt>
                                    <dd>{{ $post->category }}</dd>
                                </dl>
                                @endisset
                                <dl>
                                    <dt>Slug:</dt>
                                    <dd>{{ $post->slug }}</dd>
                                </dl>
                            </dd>

                            @if($post->author)
                                <dt>
                                    Author:
                                </dt>
                                <dd>
                                    <dl>
                                        @foreach ($post->author as $key => $value)
                                            @unless(empty($value))
                                                <dt>{{ $key }}</dt>
                                                <dd>{{ $value }}</dd>
                                            @endunless
                                        @endforeach
                                    </dl>
                                </dd>
                            @endif

                            @if($post->metadata)
                                <dt>
                                    Metadata:
                                </dt>
                                <dd>
                                    <dl>
                                        @foreach ($post->metadata as $key => $value)
                                            @unless(empty($value))
                                            <details>
                                                <summary>Show {{ $key }}</summary>
                                                <dl>
                                                    @foreach ($value as $name => $content)
                                                        <dt>{{ $name }}</dt>
                                                        <dd>{{ $content }}</dd>
                                                    @endforeach
                                                </dl>
                                            </details>
                                            @endunless
                                        @endforeach
                                    </dl>
                                </dd>
                            @endif

                            @if($post->image)
                                <dt>
                                    Image:
                                </dt>
                                <dd>
                                    <dl>
                                        <dt>
                                            Author Credit:
                                        </dt>
                                        <dd>
                                            {!! $post->image->getImageAuthorAttributionString() !!}
                                        </dd>
                                    </dl>
                                   
                                    @isset($post->image->copyright)
                                    <dl>
                                        <dt>
                                            Copyright:
                                        </dt>
                                        <dd>
                                            {!! $post->image->getCopyrightString() !!}
                                        </dd>
                                    </dl>
                                    @endisset
                                    @isset($post->image->license)
                                    <dl>
                                        <dt>
                                            License:
                                        </dt>
                                        <dd>
                                            {!! $post->image->getLicenseString() !!}
                                        </dd>
                                    </dl>
                                    @endisset
                                    <dl>
                                        <dt>
                                            Attribution:
                                        </dt>
                                        <dd>
                                            {!! $post->image->getFluentAttribution() !!}
                                        </dd>
                                    </dl>
                                    <dd>
                                        <details>
                                            <summary><b>Show raw properties</b></summary>
                                            <dl>
                                                @foreach ($post->image as $key => $value)
                                                    @unless(empty($value))
                                                        <dt>{{ $key }}</dt>
                                                        <dd>{{ $value }}</dd>
                                                    @endunless
                                                @endforeach
                                            </dl>
                                        </details>
                                    </dd>
                                    <dd>
                                        <details>
                                            <summary><b>Show metadata</b></summary>
                                            <dl>
                                                @foreach ($post->image->getMetadataArray() as $key => $value)
                                                    @unless(empty($value))
                                                        <dt>{{ $key }}</dt>
                                                        <dd>{{ $value }}</dd>
                                                    @endunless
                                                @endforeach
                                            </dl>
                                        </details>
                                    </dd>
                                </dd>
                            @endif
                        </dl>
                    </div>
                </aside>
            </section>
        </div>
    </div>
</x-app-layout>