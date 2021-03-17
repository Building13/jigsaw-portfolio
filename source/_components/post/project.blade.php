<x-post :post="$post">
    {{-- <a href="{{ $post->getUrl() }}"> --}}
        <div class="mt-1">
            <div class="mb-2">
                @if ($post->media_embed)
                    <div class="aspect-w-16 aspect-h-9 mb-4">
                        {!! $post->media_embed !!}
                    </div>
                @else
                    <img src="{{ $post->cover_image }}" alt="" class="w-full h-full object-cover mb-4">
                @endif
            </div>
            <div class="flex items-center">
                <div class="flex flex-col">
                    <h3 class="text-xl lg:text-2xl xl:text-4xl font-bold font-display leading-none tracking-tight">
                        {{ $post->title }}
                    </h3>
                </div>
            </div>
            <div class="md:text-lg mt-2 leading-tight">{{ $post->description }}</div>
            <x-post.project-meta :post="$post" />
            <div class="text-gray-500 mt-4 text-xs">
                Case study coming <strike>soon</strike> someday
            </div>
        </div>
    {{-- </a> --}}
</x-post>