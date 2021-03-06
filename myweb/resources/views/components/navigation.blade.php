<nav class="bg-gray-900 sm:border-b border-gray-100 w-full mx-auto ">

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto  inline justify-between">

        <div class="flex  h-16 justify-between mx-auto px-2 sm:px-28 md:px-40 lg:px-64">

            <div class="flex  justify-center">
                <!-- Logo -->
                <div class=" flex items-center ">
                    <a href="{{ route('index') }}">
                        <x-application-logo class="block h-12 w-12 fill-current text-gray-500 hover:text-green-500"
                                :active="request()->is('/')" />
                    </a>
                </div>
                <!-- Responsive page title-->
                <x-responsive-page-title>
                    {{ $title }}
                </x-responsive-page-title>
                 <!-- Main navigation links-->
                @include('layouts.navigation-links')

            </div>

            <!-- Settings Dropdown -->
            @auth
            <div class=" flex items-center ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>
                                @isset(Auth::user()->name)
                                    {{ Auth::user()->name }}
                                @endisset
                            </div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>

                    </x-slot>
                </x-dropdown>
            </div>

            @else
                @if (Route::has('login'))
                    <div class="flex items-center">
                        <a href="{{ route('login') }}" class=" no-underline hover:underline text-sm font-normal text-gray-500 uppercase">{{ __('Login') }}</a>
                    </div>
                @endif


            @endauth

        </div>
    </div>



</nav>
