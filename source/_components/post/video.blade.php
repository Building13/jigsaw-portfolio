<x-post :post="$post">
    <div class="mt-1">

        <div class="mb-2">
            @if ($post->video_id)
                <div class="aspect-w-16 aspect-h-9 mb-4">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $post->video_id }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            @endif
        </div>

        <div class="flex items-center">
            <div class="flex flex-col">
                <h3 class="text-xl lg:text-2xl xl:text-3xl">
                    <a href="{{ $post->getUrl() }}" class="hover:underline">
                        {{ $post->title }}
                    </a>
                </h3>
            </div>
        </div>

        <span class="text-lg">{{ $post->getExcerpt() }}</span>

        <div class="mt-4">
            @if ($post->external_host === 'YouTube')
                
            @endif
        </div>
        
    </div>
</x-post>
