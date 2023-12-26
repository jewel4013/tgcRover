@extends('profile.admin.layout')


@section('adminMainContent')
    <div class="cardList">
        <div class="p-3">
            <h2 class="text-center">Panding Members</h2>
            <hr/>
            <div class="row ">
                    @if (count($pandingUser) == 0)
                        <p class="text-center">No request is available</p>
                    @endif
                @foreach ($pandingUser as $user)

                    <div class="col-lg-3 col-md-4 col-sm-12 p-2 " id="homeCard">
                        <div class="card d-flex justify-content-center align-items-center p-0 ">                            
                            <img class="card-img-top rounded-circle mt-1" style="width: 180px;height:180px; object-fit: cover; " src="{{ asset('/img/profilePic/'.$user->avatar) }}" alt="User Image">                            
                            <div class="card-body d-flex flex-column justify-content-center align-items-center w-100 p-2">
                                <h4 class="card-title">{{ $user->name }}</h4>
                                <p class="card-text">{{ $user->mobile }}</p>
                                <div class="d-flex justify-content-around align-items-center w-100">
                                    <a href="#"
                                        id="approve"
                                        class="btn btn-success"
                                        data-id="{{ $user->id }}"
                                        data-name="{{ $user->name }}"
                                        data-email="{{ $user->email }}"
                                        >Approve</a>
                                    <a href="#" 
                                        id="delete"
                                        class="btn btn-danger"
                                        data-id="{{ $user->id }}"
                                        data-name="{{ $user->name }}"
                                        >Delete</a>
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

            // approve code
            $(document).on('click', '#approve', function(e){
                e.preventDefault();
                $('#homeCard').hide();
                let id = $(this).data('id');
                let name = $(this).data('name');
                let email = $(this).data('email');
                
                $.ajax({
                    url:"{{ route('admin.member.pendingMemberApproved') }}",
                    method: 'post',
                    data: {id:id,name:name,email:email},
                    success:function(res){
                        // console.log(res.status);
                        if(res.state == 'success'){
                            $('.cardList').load(location.href+' .cardList');                       
                            $('.pendingNumber').load(location.href+' .pendingNumber');
                            toastr.options = {
                                "closeButton": true,
                                "progressBar": true,
                                "positionClass": "toast-bottom-right",
                                "timeOut": "2000",
                            }
                            toastr.success(name+' approved as a Rover.');
                        }
                    },
                    error:function(res){

                    }
                });
            });

            // delete code
            $(document).on('click', '#delete', function(e){
                e.preventDefault();
                let id = $(this).data('id');
                let name = $(this).data('name');
                

                if(confirm('Are you sure to delete '+name+' from membership?')){
                    $.ajax({
                        url:"{{ route('admin.member.pendingMemberDelete') }}",
                        method: 'post',
                        data: {id:id,name:name},
                        success:function(res){
                            if(res.state == 'delete'){
                                $('.cardList').load(location.href+' .cardList');
                                // console.log(name);
                                $('.pendingNumber').load(location.href+' .pendingNumber'); 
                                toastr.options = {
                                "closeButton": true,
                                "progressBar": true,
                                "positionClass": "toast-bottom-right",
                                "timeOut": "2000",
                            }
                            toastr.warning(name+' delete from database.');                               
                            }
                        }
                    });
                }

                
            });
            



        });
    </script>

@endsection

{{-- {{ dd($pandingUser)->toarray() }} --}}
