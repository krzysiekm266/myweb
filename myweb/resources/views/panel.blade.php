<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin panel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    Welcome to admin panel.
                </div>

                <div  class="p-6 bg-white border-b border-gray-200">
                    <x-label>Your e-mail: {{ Auth::user()->email }}</x-label>
                    <label for="email">Change your e-mail:</label>
                    <form id="email" action="{{ route('change_email') }}" method="POST">
                        @csrf
                        <x-input type="email" name="new_email"          id="new_email"          placeholder="new e-mail" required/>
                        <x-input type="email" name="new_email_confirm"  id="new_email_confirm"  placeholder="e-mail confirm" required />
                        <x-button>{{ __('Send') }}</x-button>
                    </form>
                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
