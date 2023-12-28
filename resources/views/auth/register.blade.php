<x-guest-layout>
    @section('pageTitle', 'TGC Rover Registration')

    @section('bodyContent')
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-2 d-flex flex-column justify-content-center align-items-center">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('img/unit_logo.png') }}" alt="Unit Logo Img">
                    </a>
                    <h5 class="text-center">Tongi Govt College Rover & Girl-in Rover Unit</h5>
                </div>
                <div class="col-lg-5 col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <h2>Some rules for sign up</h2>
                    <ol style="font-size:15px ">
                        <li>সাইন আপ করার জন্য আপনাকে অবশ্যই টংগী সরকারি কলেজের শিক্ষক বা শিক্ষার্থী হতে হবে।</li>
                        <li>আপনাকে দীক্ষা প্রাপ্ত রোভার হতে হবে ।</li>
                        <li>সাবেক রোভার স্কাউট লিডার এবং সাবেক রোভার গন সাইন আপ করতে পারবে ।</li>
                        <li>শতভাগ সঠিক তথ্য দিয়ে সাইন আপ করতে হবে।</li>
                        <li>সাইন আপে ব্যবহৃত ইমেইল আইডিতে ভেরিফিকাশন লিঙ্ক যাবে, সেই লিঙ্কে ক্লিক করে ইমেইল আইডি ভেরিফাই করবে হবে। </li>
                        <li>সাইন আপ করার পরই আপনি লগ ইন করতে পারবেন না। আপনার একাউন্টটি একজন এডমিন দ্বারা সত্যায়িক করা হবে। সে পর্যন্ত অপেক্ষা করতে হবে।</li>
                        <li>সত্যায়িতের জন্য এডমিন আপানার দেয়া মোবাইল নাম্বারে কল করে কিছু তথ্য জানতে চাইতে পারে।</li>
                        <li>অনুগ্রহ পূর্বক উপরের শর্ত বহির্ভূত কেউ সাইন আপ করবেন না।</li>

                    </ol>
                </div>
                <div class="col-lg-5 col-md-6">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" >
                        @csrf
                        <div class="row shadow-lg p-3 mb-5 bg-body rounded">
                            <!-- Name -->
                            <div class="">
                                <x-input-label for="name" :value="__('Full Name')" />
                                <x-text-input id="name" class="" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-2">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="" type="email" name="email" :value="old('email')" required autocomplete="email" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="row m-0 p-0">
                                <!-- User Name -->
                                <div class="col-lg-6 mt-2">
                                    <x-input-label for="user_name" :value="__('User Name')" />
                                    <x-text-input id="user_name" class="mt-1" type="text" name="user_name" :value="old('user_name')" required autocomplete="user_name" />
                                    <x-input-error :messages="$errors->get('user_name')" class="mt-2" />
                                </div>

                                <!-- Mobile -->
                                <div class="col-lg-6 mt-2">
                                    <x-input-label for="mobile" :value="__('Mobile Number')" />
                                    <x-text-input id="mobile" class="mt-1" type="text" name="mobile" :value="old('mobile')" required autocomplete="mobile" />
                                    <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Avatar -->
                            <div class="mt-2">
                                <x-input-label for="avatar" :value="__('Avatar')" />
                                <x-text-input id="avatar" class="mt-1" type="file" name="avatar" :value="old('avatar')" files="true" required/>
                                <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
                            </div>


                            <div class="row m-0 p-0">
                                <!-- Password -->
                                <div class="col-lg-6 mt-2">
                                    <x-input-label for="password" :value="__('Password')" />
                                    <x-text-input id="password" class="mt-1"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="col-lg-6 mt-2">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                    <x-text-input id="password_confirmation" class="mt-1"
                                                    type="password"
                                                    name="password_confirmation" required autocomplete="password_confirmation" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                            </div>

                            <div class="flex d-lg-flex  d-md-flex d-sm-column justify-content-between align-items-center mt-3">
                                <div class="">
                                    <button class="btn btn-success w-full">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                                <div>or</div>
                                <div class="">
                                    <a class="btn btn-primary w-full" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
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
