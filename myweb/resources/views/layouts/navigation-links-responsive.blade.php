<nav class="sm:hidden my-1">
    <!-- Responsive navigation links -->
    @auth
    <div class="sm:hidden w-full">
        <x-responsive-nav-link :href="route('panel')" :active="request()->is('panel*')">
            {{ __('Administrator panel') }}
        </x-responsive-nav-link>
    </div>
    @endauth

    <div class="sm:hidden w-full">
        <x-responsive-nav-link :href="route('news')" :active="request()->is('news*')">
            {{ __('News') }}
        </x-responsive-nav-link>
    </div>

    <div class="sm:hidden w-full">
        <x-responsive-nav-link :href="route('about')" :active="request()->is('about')">
            {{ __('About') }}
        </x-responsive-nav-link>
    </div>

    <div class="sm:hidden w-full">
        <x-responsive-nav-link :href="route('projects')" :active="request()->is('projects*')">
            {{ __('Projects') }}
        </x-responsive-nav-link>
    </div>

</nav>
