
<x-guest-layout>
    <div class="w-full   flex flex-col bg-gray-200 items-center" >
        <form action="{{ route('image.confirm')  }}" method="POST" class="flex flex-row">
            @csrf

            <x-input class="mb-4 w-max-content" type="text" name="title" id="news-title"
                value="{{  request()->input('title') ??  'default title'  }}" hidden/>

            <textarea class=" w-max-content h-60 rounded-md shadow-sm border-gray-300
                            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="body"   hidden>
                {{   request()->input('body') ?? 'default body' }}
            </textarea>

            <img name="img_preview"  src="{{ asset( request()->input('img_path') ) }} " alt="" class="w-40 h-40 m-2 self-center rounded-md" >

            <x-input class=" " type="text" name="img_path"   value="{{  request()->input('img_path') }} " hidden/>
            <x-input class=" " type="number" name="user_id"  value="{{  request()->input('user_id')  }}" hidden />
            <x-input class=" " type="number" name="news_id"  value="{{  request()->input('news_id')  }}"  />
            <x-input class=" " type="text" name="edit"  value="{{  request()->input('edit') }}"  />

            <x-button id="confirm-button" class=" w-40 h-40  m-2  self-center ">
                {{ __('Confirm ') }}
            </x-button>

        </form>
    </div>

    <div class=" flex flex-row justify-center items-center w-full h-auto bg-gray-100 ">
        <x-storage :imgFiles="$images" :delete="false" :select="true"/>
    </div>
</x-guest-layout>
