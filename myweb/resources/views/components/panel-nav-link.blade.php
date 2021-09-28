@props(['active'])

@php
$classes = ($active ?? false)
            ? ' border-2 border-green-400  bg-gray-900  leading-5 text-green-400 focus:text-green-400 focus:outline-none focus:border-green-400 '
            : ' border-2 border-gray-100  leading-5 text-white hover:text-green-300 hover:border-gray-100 focus:outline-none focus:text-green-400 focus:border-gray-100 ';
@endphp

<a {{ $attributes->merge(['class' =>'uppercase  font-bold bg-gray-900 w-13 h-13  rounded-full sm:w-24 sm:h-8  sm:rounded-md flex items-center justify-center p-2 mt-1 mr-1   text-wrap text-center text-xxs sm:text-xs'.$classes]) }}>
    {{ $slot }}
</a>



