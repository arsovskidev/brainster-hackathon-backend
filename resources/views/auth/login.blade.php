<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div style="width: 200px">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 443 188"
                    enable-background="new 0 0 443 188" xml:space="preserve" fill="black">
                    <g>
                        <path
                            d="M134.6,1.3l-41,57.5L48,1.3H1.9l148,185l131.2-185H134.6z M146.8,125.6l-29-37L154.7,37h55.5L146.8,125.6z" />
                        <path d="M308.3,186.3l40.9-57.6l45.8,57.4l46.1-0.1L292.7,1.3L161.9,186.6L308.3,186.3z M295.8,62l29,37l-36.7,51.6
l-55.5,0.1L295.8,62z" />
                    </g>
                </svg>
            </div>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
