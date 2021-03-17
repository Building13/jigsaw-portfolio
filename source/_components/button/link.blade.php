{{-- @props(['light' => $light, 'dark' => $dark, 'label' => $label]) --}}
<a {{ $attributes->merge(['class' => 'inline-block font-bold font-display transform scale-100 hover:scale-x-105 hover:shadow-lg transition-all duration-500 ease-in-out text-center py-3 px-12 rounded text-white dark:text-black ' . $bgLight . ' ' . $bgDark ]) }}>
    {{ $label }}
</a>