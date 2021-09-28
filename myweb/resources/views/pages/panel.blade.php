@php
    $pTitle="Administrator Panel";
@endphp
<x-app-layout >
    <x-slot name="pageTitle">
        {{ $pTitle }}
    </x-slot>

    <x-slot name="header">
        <div class="hidden sm:flex sm:flex-col sm:items-center  w-full">
            <h2 class="flex  sm:items-center font-semibold text-xl text-gray-800 leading-tight ">
                {{ $pTitle }}
            </h2>
        </div>
    </x-slot>

    {{-- default slot/page content --}}
    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-md">
                <div class="p-4 bg-white border-b border-gray-200 text-center">
                    You're logged in!
                    Welcome to Administrator Panel.
                </div>
                {{-- Email settings --}}
                <div  class="p-6 bg-white border-b border-gray-200">
                    <x-label class="my-1 mb-6 font-semibold">{{ __('Your current e-mail:' ) }}
                        <span class="font-bold text-base">
                            {{ Auth::user()->email }}
                        </span>
                    </x-label>

                    <x-label for="email">
                        {{ __('Change your e-mail:') }}
                    </x-label>
                    <form id="email" action="{{ route('change_email') }}" method="POST" class="">
                        @csrf
                        <x-input class="m-1" type="email" name="new_email"          id="new_email"          placeholder="new e-mail" required />
                        <x-input class="m-1" type="email" name="new_email_confirm"  id="new_email_confirm"  placeholder="confirm e-mail" required />
                        <x-button class="m-1">
                            {{ __('Confirm') }}
                        </x-button>
                    </form>

                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                </div>
                {{-- Password settings --}}
                <div  class="p-6 bg-white border-b border-gray-200">

                    <x-label for="password">
                        {{ __('Change your password:') }}
                    </x-label>
                    <form id="password" action="{{ route('change_email') }}" method="POST">
                        @csrf
                        <x-input class="m-1" type="password" name="new_password"          id="new_password"          placeholder="new password" required/>
                        <x-input class="m-1" type="password" name="new_password_confirm"  id="new_password_confirm"  placeholder="confirm password" required />
                        <x-button class="m-1">
                            {{ __('Confirm') }}
                        </x-button>
                    </form>

                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
