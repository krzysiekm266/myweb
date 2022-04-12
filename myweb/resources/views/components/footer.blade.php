<div class="w-full mt-1  h-auto sm:h-44 bg-gray-900  bottom-0 text-gray-200 items-center justify-between text-center flex sm:flex-row flex-col">
    <div class="mx-auto sm:ml-4 flex flex-col items-baseline">
        <a href="{{ route('index') }}">
            <x-application-logo class="block h-28 w-28 fill-current text-gray-400 " />
        </a>
        <p class="text-gray-500 text-xs font-bold uppercase mt-2 text-center ">
            Created: 2021 by: krzysiekm
        </p>

    </div>
   <div class="flex flex-col mx-auto sm:ml-14 mt-1 items-baseline uppercase ">

        @auth
        <div class="">
            <x-footer-nav-link :href="route('panel.index')" :active="request()->is('panel*')" class="text-xs">
                {{ __('Administrator panel') }}
            </x-footer-nav-link>
        </div>
        @endauth

        <div class="">
            <x-footer-nav-link :href="route('news')" :active="request()->is('news*')">
                {{ __('News') }}
            </x-footer-nav-link>
        </div>

        <div class="">
            <x-footer-nav-link :href="route('about')" :active="request()->is('about*')">
                {{ __('About') }}
            </x-footer-nav-link>
        </div>

        <div class="">
            <x-footer-nav-link :href="route('projects')" :active="request()->is('projects*')">
                {{ __('Projects') }}
            </x-footer-nav-link>
        </div>
   </div>
   <div class="flex flex-col   sm:mx-8 items-baseline text-gray-500">
       <h1 class="mb-2 mt-8 font-bold">Technologies:</h1>
       <a class="mb-0.5" href="https://laravel.com" target="_blank">Laravel v{{ Illuminate\Foundation\Application::VERSION }}</a>
       <a class="mb-0.5" href="https://www.php.net" target="_blank">PHP v{{ PHP_VERSION }} </a>
       <a class="mb-0.5" href="https://tailwindcss.com" target="_blank">Tailwind Css </a>
   </div>
</div>
