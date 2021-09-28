@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-green-400 text-base font-extrabold text-green-400 bg-gray-900 focus:outline-none focus:text-green-400 focus:bg-gray-900 focus:border-green-400 '
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-400 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-400 ';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

