@props(['pageTitle'=>'page title'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'MKweb') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body  class="font-sans antialiased relative">
        <div {{ $attributes->merge(['class'=>'bg-gray-100 min-h-screen ']) }}>
            <!-- Main navigation -->
            <x-navigation>
                <x-slot name="title">
                    {{ $pageTitle }}
                </x-slot>
            </x-navigation>


            <!-- Page Heading -->
            <header class="bg-white  shadow  ">
                <div class="flex sm:space-x-6 max-w-7xl sm:mx-auto sm:py-6 sm:px-4" >
                    {{ $header }}

                     <!-- Responsive navigation -->
                    <div class="sm:hidden w-full">
                        @include('layouts.navigation-links-responsive')
                    </div>
                </div>
            </header>
            <!-- Panel navigation -->
            @auth
            <div class="h-auto mx-auto">
                @if ( request()->is('panel*') )
                    @include('layouts.panel-navigation-links')
                @endif
            </div>
            @endauth
            <!-- Page Content -->
            <main class="w-full h-auto">
                {{ $slot }}
            </main>

        </div>

        <footer>
            {{ $footer }}
        </footer>
    </body>
</html>
