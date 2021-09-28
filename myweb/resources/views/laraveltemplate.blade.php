<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MKweb') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class=" bg-main  h-screen antialiased leading-none font-sans">
<div class="flex flex-col">
    @if(Route::has('login'))
        <div class="absolute  flex flex-row top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            <!-- Dropdown menu index -->
            <x-dropdown align="right" width="48" :isIndex="Route::is('index')">
                <x-slot name="trigger">
                    <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                        <div>
                        @auth
                            @isset(Auth::user()->name)
                                <x-dropdown-link  class="rounded-md flex items-center ">
                                    {{  Auth::user()->name }}
                                    <svg class="ml-1 fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </x-dropdown-link>
                            @endisset
                        @else
                            <x-dropdown-link :href="route('login')" class="rounded-md w-auto h-auto">
                                {{ __('Login') }}
                            </x-dropdown-link>
                        @endauth
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <!-- Authentication logout,admin panel link -->
                    @auth
                    <x-dropdown-link :href="route('panel')" >
                        {{ __('Admin panel') }}
                    </x-dropdown-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                    @endauth
                </x-slot>
            </x-dropdown>

        </div>
    @endif

    <div class="min-h-screen flex items-center justify-center ">
        <div class="flex flex-col justify-around h-full bg-gray-200 bg-opacity-50 mx-auto w-3/6  rounded-md p-4">
            <div>
                <h1 class="mb-6 text-black text-center font-medium sm:font-light  tracking-wider text-4xl sm:mb-8 sm:text-6xl">
                    {{ config('app.name', 'Laravel') }}
                </h1>
                <ul class="flex flex-col items-center space-y-2 sm:justify-center sm:flex-row sm:flex-wrap sm:space-x-8 sm:space-y-0 ">
                    <li>
                        <a href="{{ route('news') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="News">News</a>
                    </li>
                    <li>
                        <a href="" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="About">About</a>
                    </li>
                    <li>
                        <a href="" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Contact">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>
