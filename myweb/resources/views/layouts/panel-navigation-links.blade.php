<nav class=" flex p-2 mx-auto ">
    <div class="flex  flex-row  flex-wrap  mx-auto items-center  w-full justify-center" >
        <x-panel-nav-link :href="route('panel')" :active="request()->is('panel')" >
            {{ __('Profile') }}
        </x-panel-nav-link>

        <x-panel-nav-link :href="route('news-editor')" :active="request()->is('*news-editor')" >
            {{ __('News edit ') }}
        </x-panel-nav-link>

        <x-panel-nav-link href="" :active="request()->is('news-edit')" >
            {{ __('panel link ') }}
        </x-panel-nav-link>

        <x-panel-nav-link href="" :active="request()->is('news-edit')" >
            {{ __('panel link ') }}
        </x-panel-nav-link>

        <x-panel-nav-link href="" :active="request()->is('news-edit')" >
            {{ __('panel link ') }}
        </x-panel-nav-link>

        <x-panel-nav-link href="" :active="request()->is('news-edit')" >
            {{ __('panel link ') }}
        </x-panel-nav-link>
        {{-- add responsive  navigation here! --}}
    </div>

</nav>
