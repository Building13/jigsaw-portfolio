---
title: Recent Work
description: Case studies for these projects are a work-in-progress. If you'd like an informal review of any of these projects, please do <a class="link text-red-500" href="/contact">get in touch</a>.
pagination:
    collection: projects
    perPage: 4
---
@extends('_layouts.page')

@section('page')
    <div class="grid grid-cols-1 gap-4 lg:gap-8 overflow-hidden">
        @foreach ($projects as $post)
            <x-post.project :post="$post"/>
        @endforeach
    </div>
@stop
