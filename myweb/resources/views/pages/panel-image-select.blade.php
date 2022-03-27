<x-guest-layout>
    <form action="" method="POST">
        @csrf

        <x-input class="mb-4 w-max-content" type="text" name="title" id="news-title"
            value="{{ old('title')  }}" />

        <textarea class=" w-max-content h-60 rounded-md shadow-sm border-gray-300
                        focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="body" id="news-body"  >
            {{ old('body') }}
        </textarea>


        <img id="img-preview" name="img_preview" src="{{ asset( $img_path ?? old('img_path')) }}" alt="" class="w-40 h-40 ">

        <x-input class=" " type="text" name="img_path" id="img-path"  value="{{ $img_path ?? old('img_path') }} " />
        <x-input class=" hidden" type="number" name="user_id" id="user-id" value="{{ Auth::user()->id }} " />
    </form>
</x-guest-layout>
