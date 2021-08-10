 @props(['active'])

@php

$classes = ($active ?? false)
            ? 'inline-flex  items-center  justify-center px-1 pt-1 border-b-2 border-green-600 font-sans
                leading-5 text-green-600 focus:outline-none focus:border-green-700 transition duration-150 ease-in-out
                md:text-2xl'
            : 'inline-flex items-center   justify-center px-1 pt-1 border-b-2 border-transparent font-sans
                leading-5 text-white hover:text-green-400 hover:border-black hover:border-b-2
                focus:outline-none focus:text-green-500 focus:border-gray-500 transition duration-150 ease-in-out
                md:text-2xl';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}

</a>



