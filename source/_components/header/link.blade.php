<a title="{{ $page->siteName }} {{ $title }}" href="{{ $href }}"
    class="hover:text-red-600 transition-colors duration-1000 font-black font-display {{ $page->isPublished($href) ? 'active text-red-600' : '' }}">
    {{ $title }}
</a>