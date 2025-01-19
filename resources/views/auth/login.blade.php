<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container">
        <div class="login_container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login_title">
                    <span>Login</span>
                </div>
                <!-- Email Address -->
                <div class="input_wrapper">
                    <x-text-input id="email" class="input_field" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <label for="user" class="label">
                        <x-input-label for="email" :value="__('Email')" />
                    </label>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="input_wrapper">
                    <x-text-input id="password" class="input_field" type="password" name="password" required autocomplete="current-password" />
                    <label for="password" class="label">
                        <x-input-label for="password" :value="__('Password')" />
                    </label>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="remember-forgot">
                    <div class="remember-me">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </div>
                </div>

                <div class="forgot">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                <div class="input_wrapper"></div>
                    <label for="password" class="input-submit">
                        <x-primary-button type="submit" class="input-submit" value="Login">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </label>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>


