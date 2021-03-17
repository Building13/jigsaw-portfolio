@extends('_layouts.main')

@section('body')
    <div class="container mx-auto py-16 lg:py-24 px-4-safe max-w-4xl text-center z-10">
        <h1 class="text-2xl lg:text-4xl xl:text-6xl">
            {{ $page->title }}
        </h1>
        @if ($page->description)
            <p class="mt-2 text-gray-500">{!! $page->description !!}</p>
        @endif
    </div>
    <div class="container mx-auto max-w-5xl px-4">
        @yield('page')
    </div>
@stop