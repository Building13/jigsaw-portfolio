@extends('_layouts.main')

@section('body')
    <div class="bg-gradient-to-tr from-pink-600 via-red-500 to-orange-500 text-white">
        <div class="container mx-auto py-24 lg:py-48 px-4-safe  max-w-4xl ">
            <h1 class="text-4xl lg:text-6xl xl:text-8xl">
                Full-Stack Product Design &amp; Poop 
            </h1>
            <p class="text-xl my-4">
                Is your digital product as awesome as it could be? Probably not. For more than 16 years, I've helped companies—large and small—conceptualize, design, ship and improve their products and experiences. Let's get to work on yours.
            </p>
            <x-button.link class="flex-grow-0" href="/contact" label="Get in touch" bgLight="bg-black" bgDark="dark:bg-white" />
        </div>
    </div>

    <div class="container mx-auto max-w-2xl">
        <div class="container mx-auto mt-24 lg:mt-48 px-4-safe flex flex-col justify-center ">
            <h2 class="text-2xl lg:text-4xl xl:text-6xl mb-6">
                Featured Projects
            </h2>
            <div class="grid grid-cols-1 gap-8 overflow-hidden">
                @foreach ($projects->where('featured', true) as $post)
                    <x-post.project :post="$post"/>
                @endforeach
            </div>
            <x-button.link href="/work" label="See More Work" bgLight="bg-black" bgDark="dark:bg-white"  />
        </div>

        <div class="container mx-auto mt-24 lg:mt-48 px-4-safe flex flex-col justify-center ">
            <h2 class="text-2xl lg:text-4xl xl:text-6xl mb-6">
                Featured Posts
            </h2>
            <div class="grid grid-cols-1 gap-8 overflow-hidden">
                @foreach ($posts->where('featured', true) as $post)
                    <x-post.article :post="$post"/>
                @endforeach
            </div>
            <x-button.link href="/blog" label="See More Posts" bgLight="bg-black" bgDark="dark:bg-white"  />
        </div>
    </div>
@endsection
