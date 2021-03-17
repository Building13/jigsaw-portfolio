---
title: Thoughts on Design
description: <p>You can find more and follow me on <a class="link text-red-500" href="https://medium.com/@nathangross">Medium</a>.</p>
pagination:
    collection: posts
    perPage: 4
---
@extends('_layouts.page')

@section('page')
    <div class="container mx-auto max-w-4xl">

        <div class="text-center mb-4">
            
        </div>
        
        <div class="grid lg:grid-cols-1 gap-8">
            @foreach ($pagination->items as $post)
                <x-post.article :post="$post" />
            @endforeach
        </div>

        <x-pagination :pagination="$pagination" />
    </div>
@stop
