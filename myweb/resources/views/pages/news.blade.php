@php
    $pTitle="News";
@endphp
<x-app-layout>
    <x-slot name="pageTitle">
        {{ $pTitle }}
    </x-slot>

    <x-slot name="header">
        <div class="hidden sm:flex sm:flex-col sm:items-center  sm:w-full">
            <h2 class="flex sm:items-center font-semibold text-xl text-gray-800 leading-tight ">
                {{ $pTitle }}
            </h2>
        </div>
    </x-slot>

    <div class="pt-12 pb-2 md:w-1/2 mx-auto">
        <div class="max-w-7xl mx-auto ">
            <div class="bg-gray-100 ">
                <x-content-layout class=" ">
                    <x-single-news imgPath=" image ">
                        <x-slot name="title">
                            Tutul
                        </x-slot>
                        <x-slot name="body">
                           Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                           Accusantium eveniet maxime doloremque quam unde sapiente quia praesentium quae
                           eligendi placeat! Numquam consequuntur illo molestias tempora vitae quam iusto accusantium cupiditate.
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, labore necessitatibus delectus perferendis saepe
                           aspernatur possimus quibusdam voluptatibus cupiditate
                            hic suscipit libero recusandae at sapiente reprehenderit voluptatum vitae ducimus incidunt!
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, quam fugiat perferendis earum suscipit assumenda? Eligendi
                            libero exercitationem id ullam. Est minus officia perspiciatis
                            quisquam, illo nihil repellat autem maiores.
                        </x-slot>
                    </x-single-news>

                    @isset($news)
                      @foreach ($news as $item)
                          {{-- {{ $item->id }} ::
                          {{ $item->title }} ::
                          {{ $item->body }} ::
                          {{ $item->img_path }} <br> --}}

                        <x-single-news :imgPath=" $item->img_path ">
                            <x-slot name="title">
                                {{ $item->title }}
                            </x-slot>
                            <x-slot name="body">
                                {{ $item->body }}
                            </x-slot>
                        </x-single-news>

                      @endforeach

                    @endisset

                </x-content-layout>
            </div>
        </div>
    </div>

    <x-slot name="footer">
        <x-footer />
     </x-slot>
</x-app-layout>
