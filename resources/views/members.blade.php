@extends('layouts.app')

@section('bodyContent')
    <div class="mt-4">
        <h2 class="text-center">All members of TGC</h2>
    </div>
    <hr class="my-2">
    <div class="container">
        <div class="">
            <span>Filter</span>
            <form action="" class="d-inline-block">
                <select name="" id="" class="form-select">
                    <option selected>All members</option>
                    <option value="">RSL</option>
                    <option value="">SRM</option>
                    <option value="">Rover</option>
                    <option value="">Former Rover</option>
                </select>
            </form>
        </div>
        
        <div class="row">
            @foreach ($alluser as $user)
                <div class="col-lg-3 col-md-6 col-sm-12 p-2 " id="homeCard">
                    <div class="card d-flex justify-content-center align-items-center p-0 ">
                        <img class="card-img-top rounded-circle mt-1" style="width: 180px;height:180px; object-fit: cover; " src="{{ asset('/img/profilePic/'.$user->avatar) }}" alt="User Image">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center w-100 p-2">
                            <h4 class="card-title">{{ $user->name }}</h4>
                            <p class="card-text">{{ $user->user_type }}</p>                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
              
    </div>
@endsection
