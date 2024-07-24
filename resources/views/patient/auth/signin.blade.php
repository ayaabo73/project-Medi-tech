<x-guest-layout>
   
    <form method="POST" action="{{ route('login.patient') }}">
        @csrf

    
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="flex items-center justify-end mt-4">
            <p>  @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request')}}">
                {{ __('Forgot your password?') }}
            </a>
            	@endif</p>
                &ensp;&ensp;&ensp;&ensp;
       

            <x-primary-button class="ms-4">
                {{ __('Log In') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
