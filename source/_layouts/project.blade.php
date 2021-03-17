@extends('_layouts.main')

@php
    $page->type = 'article';
@endphp

@section('body')


    <div class="prose dark:prose-light container mx-auto max-w-7xl">
    
        <h1 class="text-2xl lg:text-4xl xl:text-6xl mb-4">{{ $page->title }}</h1>
        <div class="grid grid-cols-4">
            <div class="">
                <x-post.project-meta :post="$page" />
                @if ($page->categories)
                    @foreach ($page->categories as $i => $category)
                        <a
                            href="{{ '/blog/categories/' . $category }}"
                            title="View posts in {{ $category }}"
                            class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
                        >{{ $category }}</a>
                    @endforeach
                @endif
            </div>

            <div class="col-span-3">
                @if ($page->cover_image)
                    <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
                @endif

                <div class="mb-10 pb-4" v-pre>
                    @yield('content')
                </div>
            </div>
        </div>
        
        <nav class="flex justify-between text-sm md:text-base">
            <div>
                @if ($next = $page->getNext())
                    <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                        &LeftArrow; {{ $next->title }}
                    </a>
                @endif
            </div>

            <div>
                @if ($previous = $page->getPrevious())
                    <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                        {{ $previous->title }} &RightArrow;
                    </a>
                @endif
            </div>
        </nav>
    </div>
@endsection
