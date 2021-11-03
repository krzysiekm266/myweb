@php
    $pTitle="Profile";
@endphp
<x-app-layout  >
    <x-slot name="pageTitle">
        {{ $pTitle }}
    </x-slot>

    <x-slot name="header">
        <div class="hidden sm:flex sm:flex-col sm:items-center  w-full">
            <h2 class="flex  sm:items-center font-semibold text-xl text-gray-800 leading-tight ">
                {{  $pTitle }}
            </h2>
        </div>
    </x-slot>

    {{-- default slot/page content --}}
    <div class=" md:w-3/4 lg:w-1/2 mx-auto p-2">
        <div class="p-4  mb-2 mx-2 bg-white border-b border-gray-200 w-max-content text-center rounded-md ">
            You're logged in!
            Welcome to  Administrator Profile.
        </div>

        <div class="max-w-7xl px-2 mx-auto  ">
            <div class="bg-white  shadow-sm rounded-md h-auto p-2">
                <x-auth-validation-errors class="my-4 w-max-content sm:w-1/2 sm:mx-auto" :errors="$errors"/>
                {{-- Email settings --}}
                <form action="{{ route('user.update.email') }}" method="post"  class="p-6 pb-0 bg-white h-auto text-center">
                    @csrf
                    <x-label class="my-1 mb-6 font-semibold  w-full sm:w-1/2 sm:mx-auto">
                        {{ __('Your current e-mail:' ) }}
                        <span class="font-bold text-base">
                            {{ Auth::user()->email }}
                        </span>
                    </x-label>

                    <div class="w-max-content border-t border-gray-200 flex flex-col">
                        <x-label for="email"  class="text-left m-1 w-max-content sm:w-1/2 sm:mx-auto">
                            {{ __('Change your e-mail:') }}
                        </x-label>

                        <x-input class="m-1 w-max-content sm:w-1/2 sm:mx-auto" type="email" name="new_email"          id="new-email"          placeholder="new e-mail" value="{{ old('new_email') }}" required />
                        <x-input class="m-1 w-max-content sm:w-1/2 sm:mx-auto" type="email" name="new_email_confirmation" id="new-email-confirmation"  placeholder="confirm e-mail" required />
                        <x-button class=" m-1 w-max-content sm:w-1/2 sm:mx-auto" >
                            {{ __('Confirm') }}
                        </x-button>
                    </div>
                </form>

                {{-- Password settings --}}
                <form action="{{ route('user.update.password') }}" method="post"  class="p-6  bg-white h-auto">
                    @csrf
                    <div class="w-max-content border-t border-gray-200 flex flex-col">

                        <x-label for="password" class="m-1 w-max-content sm:w-1/2 sm:mx-auto">
                            {{ __('Change your password:') }}
                        </x-label>

                        <x-input class="m-1 w-max-content sm:w-1/2 sm:mx-auto" type="password" name="new_password" id="new-password" placeholder="new password"  required/>
                        <x-input class="m-1 w-max-content sm:w-1/2 sm:mx-auto" type="password" name="new_password_confirmation"  id="new-password-confirmation"  placeholder="confirm password" required />
                        <x-button class="m-1 w-max-content sm:w-1/2 sm:mx-auto" formaction="{{ route('user.update.password') }}">
                            {{ __('Confirm') }}
                        </x-button>
                    </div>
                </form>



            </div>
        </div>
    </div>

    <x-slot name="footer">
        {{-- <x-footer /> --}}
     </x-slot>
</x-app-layout>
