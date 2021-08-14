{{-- <div class="bg-black grid grid-flow-row justify-items-center p-2 pb-0 space-x-4 sm:justify-center sm:grid-flow-col "> --}}
<div class="bg-black flex flex-col  justify-center p-2 pb-0 sm:space-x-8 sm:justify-center sm:flex-row ">

    <x-navigation.navigation-button :href="route('index')" :active="request()->routeIs('index')">
        <svg  class="mx-2 h-8 w-8 md:h-10 md:w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        Home
    </x-navigation.navigation-button>

    <x-navigation.navigation-button :href="route('products')" :active="request()->routeIs('products')">
        <svg xmlns="http://www.w3.org/2000/svg" class="mx-2 h-8 w-8 md:h-10 md:w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
        </svg>
        Products
    </x-navigation.navigation-button>

    <x-navigation.navigation-button :href="route('about')" :active="request()->routeIs('about')">
        <svg xmlns="http://www.w3.org/2000/svg" class="mx-2 h-8 w-8  md:h-10 md:w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        About
    </x-navigation.navigation-button>



</div>
{{-- <hr style="border: 0px; background: red; height: 1px;"> --}}
<hr class="border-0 bg-green-600 h-0.5 ">
