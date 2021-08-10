<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-application.header/>
<body class="grid grid-flow-row w-auto">
    <x-application.banner/>
    <x-navigation.login/>
    <x-navigation.navigation/>
    <x-application.content>
        {{ $slot }}
    </x-application.content>
    <x-application.footer/>
</body>
</html>
