<x-post :post="$post">
    <div class="">

        @if ($post->media_embed)
            <div class="mb-2">
                <div class="aspect-w-16 aspect-h-9 mb-4">
                    {!! $post->media_embed !!}
                </div>
            </div>
        @elseif ($post->cover_image)
            <div class="mb-2">
                <img src="{{ $post->cover_image }}" alt="" class="w-full h-full object-cover mb-4">
            </div>
        @endif

        <div class="flex items-center">
            <div class="flex flex-col">
                <span class="text-gray-500">
                    {{ date('F j, Y', $post->date) }}
                </span>
                <h3 class="text-xl lg:text-2xl xl:text-3xl mb-2">
                    @if ($post->external_host === 'YouTube')
                        Video: {{ $post->title }}
                    @else
                        {{ $post->title }}
                    @endif
                </h3>
            </div>
        </div>

        <span class="text-lg">{{ $post->getExcerpt() }}</span>

        <div class="mt-4">
            @if ($post->external_host === 'Medium')
                <a href="{{ $post->external_url }}" class="link flex items-center space-x-1 text-green-500">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                    <span>Read on Medium</span>
                </a>
            @elseif ($post->external_host === 'YouTube')
                <a href="{{ $post->external_url }}" class="link flex items-center space-x-1 text-red-500">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                    <span>Watch on YouTube</span>
                </a>
            @else 
                <a href="{{ $post->getUrl() }}" class="link flex items-center space-x-1 text-red-500">
                    Read Full Article
                </a>
            @endif
        </div>
        
    </div>
</x-post>
