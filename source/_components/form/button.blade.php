<input
    type="submit"
    value="Submit"
    {{ $attributes->merge(['class' => 'inline-block font-bold font-display transform scale-100 hover:scale-x-105 hover:shadow-lg transition-all duration-500 ease-in-out text-center py-3 px-12 rounded text-white dark:text-black bg-' . $light . ' dark:bg-' . $dark ]) }}
    {{-- class="block bg-black text-white dark:bg-white dark:text-black text-sm font-semibold leading-snug tracking-wide uppercase shadow rounded-lg cursor-pointer px-6 py-3" --}}
>