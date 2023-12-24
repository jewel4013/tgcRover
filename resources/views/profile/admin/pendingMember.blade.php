@extends('profile.admin.layout')

@section('adminMainContent')
    <div class="p-3">  
        <h2 class="text-center">Panding Members</h2>  
        {{-- <table class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile number</th>
                <th>Actions</th>
            </tr>
            @foreach ($pandingUser as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mobile }}</td>
                    <td>
                        <button class="btn btn-success">Approve</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </table> --}}
        <div class="row">
            @foreach ($pandingUser as $user)
                <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                    <div class="card d-flex justify-content-center align-items-center p-0">
                        <img class="card-img-top rounded-circle mt-1" style="width: 150px;height:150px" src="{{ asset('/img/profilePic/'.$user->avatar) }}" alt="Card image">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center w-100 pb-2">
                            <h4 class="card-title">{{ $user->name }}</h4>
                            <p class="card-text">{{ $user->mobile }}</p>
                            <div class="d-flex justify-content-around align-items-center w-100">
                                <a href="#" class="btn btn-success">Approve</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                </div> 
            @endforeach
        </div>
       

    </div>
@endsection

{{-- {{ dd($pandingUser)->toarray() }} --}}