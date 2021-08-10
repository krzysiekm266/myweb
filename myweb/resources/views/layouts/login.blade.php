<x-application.application>
    Login

    <a href="{{ route('users_list') }}">users list</a>
    @isset($users)
        @foreach ($users as $row)
           @foreach ($row as $item)
               {{ $item }}
           @endforeach
        @endforeach
    @endisset


</x-application.application>
