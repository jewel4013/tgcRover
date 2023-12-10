@extends('profile.profile')




    @section('profileContetn')
        <div class="py-2">
            <div class="row">
                <div class="col-md-4">
                    @include('profile.partials.update-profile-information-form')
                </div>
                <div class="col-md-4">
                    @include('profile.partials.update-password-form')
                </div>
                <div class="col-md-4">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    @endsection

