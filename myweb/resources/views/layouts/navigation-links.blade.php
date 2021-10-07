
<nav class=" flex ">
    <!-- Navigation Links -->
    @auth
    <div class="hidden  sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('panel')" :active="request()->is('panel*')">
            {{ __('Administrator panel') }}
        </x-nav-link>
    </div>
    @endauth

    <div class="hidden sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('news')" :active="request()->is('news') " >
            {{ __('News ') }}
        </x-nav-link>
    </div>

    <div class="hidden  sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link :href="route('about')" :active="request()->is('about') " >
            {{ __('About ') }}
        </x-nav-link>
    </div>


</nav>
