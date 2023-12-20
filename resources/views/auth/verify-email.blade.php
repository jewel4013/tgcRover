@extends('layouts.guest')

@section('bodyContent')        
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card p-3 m-5 " style="border-radius: 10px">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Hi '.Auth::user()->name.',') }}<br/> {{ __('Thanks for joining TGC Rover in online. Before getting started, could you verify your email address by clicking on the link we just emailed to you ?') }} <br/><br/> {{ __('If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address: ') }}<span style="font-style: italic">{{ Auth::user()->email }}</span> {{ __('you provided during registration.') }}
                </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
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

    </div>
@endsection

