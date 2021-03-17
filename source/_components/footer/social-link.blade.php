<a {{ $attributes->merge(['class' => 'inline-block rounded-full p-4 bg-black dark:bg-white bg-opacity-10 hover:bg-opacity-25 transition-all duration-1000']) }}>
    {{ $slot }}
</a>