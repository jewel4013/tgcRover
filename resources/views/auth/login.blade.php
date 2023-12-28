<x-guest-layout>
    @section('pageTitle', 'TGC Rover Login')

    @section('bodyContent')
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-2"></div>
                <div class="col-lg-5 d-flex flex-column justify-content-center align-items-center">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('img/unit_logo.png') }}" alt="Unit Logo Img">
                    </a>
                    <h5 class="text-center">Tongi Govt College Rover & Girl-in Rover Unit</h5>
                </div>
                <div class="col-lg-5 ">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row shadow-lg p-3 mb-5 bg-body rounded">
                            <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-3">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="flex items-center justify-between mt-3">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                </label>
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>



                            <div class="flex d-lg-flex  d-md-flex d-sm-column justify-content-between align-items-center mt-5">
                                <div class="">
                                    <button class="btn btn-success w-full">
                                        {{ __('Log in') }}
                                    </button>
                                </div>
                                <div>or</div>
                                <div class="">
                                    <a href="{{ route('register') }}" class="w-full btn btn-primary">
                                        {{ __('Create a new account') }}
                                    </a>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>


            </div>
        </div>
    @endsection
</x-guest-layout>
