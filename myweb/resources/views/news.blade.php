<x-app-layout>
    <x-slot name="header">
        <div class="flex ">
            <h2 class="flex items-center font-semibold text-xl text-gray-800 leading-tight ">
                {{ __('News') }}
            </h2>

        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    These are the news.
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
