<a title="{{ $page->siteName }} {{ $title }}" href="{{ $href }}"
    class="text-4xl font-black font-display {{ $page->isPublished($href) ? 'active text-blue-600' : '' }}">
    {{ $title }}
</a>