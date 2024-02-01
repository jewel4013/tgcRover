@extends('layouts.app')

@section('bodyContent')
    <div class="mt-4">
        <h2 class="text-center">All members of TGC</h2>
    </div>
    <hr class="my-2">
    <div class="container">
        <div class="">
            <span>Filter</span>
            <div class="row">
                <div class="col-md-6">
                    <form action="" >
                        <select name="" id="" class="form-select rounded">
                            <option selected>All members</option>
                            <option value="">RSL</option>
                            <option value="">SRM</option>
                            <option value="">Rover</option>
                            <option value="">Former Rover</option>
                        </select>
                    </form>
                </div>
                <div class="col-md-6 mt-xl-0 mt-lg-0 mt-md-0 mt-sm-2 mt-2">                    
                    <input type="text" placeholder="Search by name or Batch" class="w-100 rounded" id="filter_search">                   
                </div>
                
            </div>            
        </div>
        
        <div class="row userCard">
            @foreach ($alluser as $user)
                <div class="col-lg-3 col-md-6 col-sm-12 p-2 homeCard" id="homeCard">
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

@section('mainScripts')
    @parent

    <script>
        $(document).ready(function(){
            $(document).on('click', '#menumembers', function(e){
                e.preventDefault();
            });

            $(document).on('keyup', function(e){
                e.preventDefault();

                let filter_search = $('#filter_search').val();
                $.ajax({
                    url:"{{ route('members.serach') }}",
                    method: 'GET',
                    data:{filter_search:filter_search},
                    success:function(res){                        
                        $('.homeCard').html(res);

                        if(res.status == 'Nothing_found'){
                            $('.homeCard').html('<sapn class="text-danger">'+'Nothing Found'+'</span>');
                        }
                    }
                });
            });

        });
    </script>
@endsection
