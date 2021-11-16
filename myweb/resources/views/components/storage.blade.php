@props([
    'imgFiles'=>null,
    'delete'=>false,
    'select'=>false,
    ])

<div class="flex flex-wrap p-1 mb-4">

    @isset($imgFiles)
        @foreach ($imgFiles as $img)
            <div class="mx-1 ">
                <img src="{{asset($img) }}" alt="" class="w-28 h-28 m-1" />

                <form action="{{ route('storage.delete') }}" method="POST" class="flex flex-col {{ $delete ? ' ' : ' hidden'; }}">
                    @csrf
                    <input type="text" name="img_path" value="{{ $img }}" hidden>
                    <x-button class="w-3/4 mx-auto mb-2">
                        {{ __('Delete') }}
                    </x-button>

                </form>

                <form action="{{ route('news.create') }}" method="POST" class="flex flex-col {{ $select ? ' ' : ' hidden'; }}">
                    @csrf
                    <input id="img-path" type="text" name="img_path" value="{{ $img }}" hidden>

                    <x-button id="storage-select-img" class="w-3/4 mx-auto mb-2" onclick="selectImage()">
                        {{ __('Select') }}
                    </x-button>

                </form>

            </div>
        @endforeach
    @endisset

<script>
    function selectImage() {
        let title = document.getElementById("news-title").value;
        let body = document.getElementById("news-body").value ;

        window.sessionStorage.setItem("title",title);
        window.sessionStorage.setItem("body",body);
    }
</script>
</div>

