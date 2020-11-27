@props(['theme'])

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-'.$theme.'-600 hover:bg-'.$theme.'-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-gray-900 focus:outline-none focus:border-'.$theme.'-700 focus:shadow-outline-'.$theme.' disabled:opacity-25 shadow-lg transform hover:-translate-y-1 hover transition ease-in-out duration-200']) }} >
    {{ $slot }}
</button>
