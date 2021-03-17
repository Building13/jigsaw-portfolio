<header x-data="{ open: false }" class="bg-white dark:bg-black bg-opacity-95 w-full fixed z-30">
    <div class="flex items-center h-24 py-4" 
    role="banner">
        <div class="flex items-center w-full px-4-safe lg:px-8-safe">
            <div class="flex items-center">
                <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center p-2 hover:text-red-500 transition-all duration-1000">
                    <h1 class="text-xl">Jigsaw Portfolio</h1>
                </a>
            </div>
            <div class="flex items-center ml-auto">
                <nav class="hidden lg:flex items-center justify-end text-lg space-x-8">
                    <x-header.link :page="$page" title="Work" href="/work" />
                    <x-header.link :page="$page" title="Writing" href="/blog" />
                    {{-- <x-header.link :page="$page" title="About" href="/about" /> --}}
                    <x-header.link :page="$page" title="Contact" href="/contact" />
                </nav>
                <button @click="open = true"
                    class="flex justify-center items-center h-10 px-5 lg:hidden focus:outline-none"
                >
                    <svg x-show="! open" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
                    </svg>

                    <svg x-show="open" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>
        </div>
    </div>
    <nav x-show="open"
        @click.away="open = false"
        class="flex flex-col h-screen items-center text-4xl space-y-16 py-8 lg:hidden"
    >
        <x-header.link :page="$page" title="Work" href="/work" />
        <x-header.link :page="$page" title="Writing" href="/blog" />
        <x-header.link :page="$page" title="Videos" href="/video" />
        {{-- <x-header.link :page="$page" title="About" href="/about" /> --}}
        <x-header.link :page="$page" title="Contact" href="/contact" />
    </nav>
</header>
