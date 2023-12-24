@extends('layouts.guest')

@section('bodyContent')        
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-lg-4 col-md-6 col-sm-12"></div>
        <div class="card col-lg-4 col-md-6 col-sm-12 p-3 mt-5 " style="border-radius: 10px">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Hi '.Auth::user()->name.',') }}<br/> {{ __('Thanks for joining TGC Rover in online. Before getting started, could you verify your email address by clicking on the link we just emailed to you ?') }} <br/><br/> {{ __('If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-2 font-medium text-sm text-green-600">
                    <span style="color: red">{{ __('A new verification link has been sent to the email address: ') }}</span><span style="color: green; font-style: italic">{{ Auth::user()->email }}</span> <span style="color: red">{{ __('you provided during registration.') }}</span>
                </div>
            @endif

            <div class="mt-2 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <button class="btn btn-primary">
                            {{ __('Resend Verification Email') }}
                        </button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="btn btn-info mt-2">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12"></div>

    </div>
@endsection

