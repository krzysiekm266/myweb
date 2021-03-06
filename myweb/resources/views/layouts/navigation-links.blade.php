
<nav class=" flex ">
    <!-- Navigation Links -->
    @auth
    <div class="hidden   sm:-my-0.5 sm:ml-10 sm:flex">
        <x-nav-link :href="route('panel.index')" :active="request()->is('panel*')">
            {{ __('Administrator panel') }}
        </x-nav-link>
    </div>
    @endauth

    <div class="hidden sm:-my-0.5 sm:ml-10 sm:flex">
        <x-nav-link :href="route('news')" :active="request()->is('news*') " >
            {{ __('News ') }}
        </x-nav-link>
    </div>

    <div class="hidden   sm:-my-0.5 sm:ml-10 sm:flex">
        <x-nav-link :href="route('projects')" :active="request()->is('projects') " >
            {{ __('Projects ') }}
        </x-nav-link>
    </div>

    <div class="hidden   sm:-my-0.5 sm:ml-10 sm:flex">
        <x-nav-link :href="route('about')" :active="request()->is('about') " >
            {{ __('About ') }}
        </x-nav-link>
    </div>




</nav>
