<x-guest-layout>
    @section('bodyContent')
        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <h2>Some rules for sign up</h2>
                </div>
                <div class="col-lg-4">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" >
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Full Name')" />
                            <x-text-input id="name" class="" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>


                        <!-- Email Address -->
                        <div class="">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- User Name -->
                        <div class="">
                            <x-input-label for="user_name" :value="__('User Name')" />
                            <x-text-input id="user_name" class="mt-1" type="text" name="user_name" :value="old('user_name')" required autocomplete="user_name" />
                            <x-input-error :messages="$errors->get('user_name')" class="mt-2" />
                        </div>

                        <!-- Mobile -->
                        <div class="">
                            <x-input-label for="mobile" :value="__('Mobile Number')" />
                            <x-text-input id="mobile" class="mt-1" type="text" name="mobile" :value="old('mobile')" required autocomplete="mobile" />
                            <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                        </div>

                        <!-- Avatar -->
                        <div class=" form-group">
                            <x-input-label for="avatar" :value="__('Avatar')" />
                            <x-text-input id="avatar" class="mt-1" type="file" name="avatar" :value="old('avatar')" files="true" required/>
                            <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="mt-1"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-text-input id="password_confirmation" class="mt-1"
                                            type="password"
                                            name="password_confirmation" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4 w-full">
                            <button class="btn btn-success w-full">
                                {{ __('Register') }}
                            </button>
                        </div>

                        <div class="flex items-center justify-center mt-2">
                            <p class=" text-cneter">--------or-------</p>
                        </div>

                        <div class="flex items-center justify-end mt-2 w-full">
                            <a class="btn btn-primary w-full" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    @endsection
</x-guest-layout>
