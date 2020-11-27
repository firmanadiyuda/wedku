@props(['name'])

<a {!! $attributes->merge(['class' => 'cursor-pointer px-4 py-2 mt-2 text-sm text font-semibold bg-transparent rounded-lg dark:bg-transparent dark-hover:bg-primary-500 dark-focus:bg-gray-600 dark-focus:text-white dark-hover:text-gray-100 dark:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-100 hover:bg-primary-500 focus:outline-none']) !!}>{{ $name }}</a>