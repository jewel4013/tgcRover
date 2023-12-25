@extends('profile.admin.layout')

@section('adminMainContent')
    <div class="cardList">
        <div class="p-3">
            <h2 class="text-center">Panding Members</h2>
            <div class="row ">
                    @if (count($pandingUser) == 0)
                        <p class="text-center">No request is available</p>
                    @endif
                @foreach ($pandingUser as $user)

                    <div class="col-lg-3 col-md-4 col-sm-6 p-2 ">
                        <div class="card d-flex justify-content-center align-items-center p-0 ">
                            <img class="card-img-top rounded-circle mt-1" style="width: 180px;height:180px; object-fit: cover;" src="{{ asset('/img/profilePic/'.$user->avatar) }}" alt="User Image">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center w-100 p-2">
                                <h4 class="card-title">{{ $user->name }}</h4>
                                <p class="card-text">{{ $user->mobile }}</p>
                                <div class="d-flex justify-content-around align-items-center w-100">
                                    <a href="#" 
                                        id="approve" 
                                        class="btn btn-success"
                                        data-id="{{ $user->id }}"
                                        >Approve</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $(document).on('click', '#approve', function(e){
                e.preventDefault();
                let id = $(this).data('id');
                console.log(id);
                
                $.ajax({
                    url:"{{ route('admin.member.pendingMemberApproved') }}",
                    method: 'post',
                    data: {id:id},
                    success:function(res){
                        if(res.state == 'success'){
                            $('.cardList').load(location.href+' .cardList');
                            // console.log('ok');
                        }
                    },
                    error:function(res){

                    }
                });
            });
        });
    </script>

@endsection

{{-- {{ dd($pandingUser)->toarray() }} --}}
