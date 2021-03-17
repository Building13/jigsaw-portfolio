<ul class="mt-2 flex flex-col text-sm text-gray-500">
    @if ($post->date)
        <li class="">{{ $post->date }}</li>
    @endif
    @if ($post->client)
        <li class="">Client: {{ $post->client }}</li>
    @endif
    @if ($post->agency)
        <li class="">Agency: {{ $post->agency }}</li>
    @endif
    @if ($post->platform)
        <li class="">Platform: {{ implode(', ', $post->platform) }}</li>
    @endif
    @if ($post->role)
        <li class="">Role: {{ implode(', ', $post->role) }}</li>
    @endif
    @if ($post->technology)
        <li class="">Technology: {{ implode(', ', $post->technology) }}</li>
    @endif
</ul>
