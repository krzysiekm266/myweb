<nav class=" flex p-2 mx-auto ">
    <div class="flex  flex-row  flex-wrap  mx-auto items-center  w-full justify-center" >
        <x-panel-nav-link :href="route('panel.index')" :active="request()->is('panel')">
            {{ __('Panel') }}
        </x-panel-nav-link>

        <x-panel-nav-link :href="route('panel.profile')" :active="request()->is('panel/profile')" >
            {{ __('Profile') }}
        </x-panel-nav-link>

        <x-panel-nav-link :href="route('news.create')" :active="request()->is('panel/news*')" >
            {{ __('News editor ') }}
        </x-panel-nav-link>

        <x-panel-nav-link :href="route('project.create')" :active="request()->is('panel/project/create')" >
            {{ __('Project Editor ') }}
        </x-panel-nav-link>

        <x-panel-nav-link :href="route('storage.create')" :active="request()->is('panel/storage/create')" >
            {{ __('Storage ') }}
        </x-panel-nav-link>


    </div>


</nav>
