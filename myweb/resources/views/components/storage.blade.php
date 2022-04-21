@props([
    'imgFiles'=>null,
    'delete'=>false,
    'select'=>false,

    ])

<div class="flex flex-wrap p-1 mb-4">

    @isset($imgFiles)
        @foreach ($imgFiles as $img)
            <div class="mx-1 ">
                <img src="{{asset($img) }}" alt="" class="w-28 h-28 m-1 rounded-md" />

                <form action="{{ route('storage.delete') }}" method="POST" class="flex flex-col {{ $delete ?: ' hidden'; }}">
                    @csrf
                    <input type="text" name="img_path" value="{{ $img }}" hidden>
                    <x-button class="w-3/4 mx-auto mb-2">
                        {{ __('Delete') }}
                    </x-button>

                </form>


                <form action="{{ route('image.index') }}" method="POST" class="flex flex-col {{ $select ?: ' hidden'; }}">
                    @csrf

                    <x-input class="  mb-4 w-max-content" type="text" name="title" id="news-title"
                        value="{{  request()->input('title') ??  'default title'  }}" hidden />

                    <textarea class=" w-max-content h-60 rounded-md shadow-sm border-gray-300
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="body" id="news-body"  hidden>
                        {{   request()->input('body') ?? 'default body' }}
                    </textarea>

                    <x-input class="" type="text" name="img_path"   value="{{ $img ?? 'default path'}} " hidden />
                    <x-input class=" " type="number" name="user_id"  value="{{  request()->input('user_id')  }}" hidden />
                    <x-input class=" " type="number" name="news_id"  value="{{  request()->input('news_id')  }}" hidden />
                    <x-input class="" type="text" name="edit"   value="{{ request()->input('edit') }} " hidden />

                    <x-button id="storage-select-img" class="w-3/4 mx-auto mb-2" >
                        {{ __('Select') }}
                    </x-button>

                </form>



            </div>
        @endforeach
    @else
            <p> Storage is empty. </p>
    @endisset

{{-- <script>
    function selectImage() {
        // for creating news form
        let title = document.getElementById("news-title").value;
        let body = document.getElementById("news-body").value ;

        window.sessionStorage.setItem("title",title);
        window.sessionStorage.setItem("body",body);

        //for updating news form
        let updateTitle = document.getElementById("update-news-title").value;
        let updateBody = document.getElementById("update-news-body").value ;

        window.sessionStorage.setItem("update-title",title);
        window.sessionStorage.setItem("update-body",body);


    }
</script> --}}
</div>

