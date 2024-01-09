@extends('profile.admin.layout')

@section('adminMainContent')
    <div class="p-3">
        <h2 class="text-center">All Members</h2>
        <hr/>
        <table class="table table-striped sus-table">
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Batch</th>
                <th>Actions</th>
            </tr>
            @foreach ($alluser as $key=>$user)
                <tr class="p-0 m-0">
                    <td class="p-1">{{ $key+1 }}</td>
                    <td class="p-1">
                        <a href="{{ url('/admin/members/'.$user->user_name) }}" class="">{{ $user->name }}</a>
                    </td>
                    <td class="p-1">{{ $user->email }}</td>
                    <td class="p-1">{{ $user->mobile }}</td>
                    <td class="p-1">22</td>
                    <td class="p-1">
                        <a href="#"
                            class="btn {{ $user->status == 1 ? 'btn-danger' : 'd-none' }} btn-sm m-1"
                            id="suspend"
                            data-id="{{ $user->id }}"
                            data-name="{{ $user->name }}"
                            data-email="{{ $user->email }}"
                            >{{ $user->status == 1 ? 'Suspend' : '' }}</a>

                            <a href="#"
                            class="btn {{ $user->status == 2 ? 'btn-success' : 'd-none' }} btn-sm m-1"
                            id="unsuspend"
                            data-id="{{ $user->id }}"
                            data-name="{{ $user->name }}"
                            data-email="{{ $user->email }}"
                            >{{ $user->status == 2 ? 'Unsuspend' : '' }}</a>
                    </td>
                </tr>
            @endforeach
        </table>
        @if ( count($alluser) == 0)
            <p>Nothing found</p>
        @endif
    </div>

@endsection


@section('script')
    <script>
        $(document).ready(function(){

            // Suspend code
            $(document).on('click', '#suspend', function(e){
                e.preventDefault();

                let id = $(this).data('id');
                let name = $(this).data('name');
                let email = $(this).data('email');

                if(confirm('Are you sure to suspend '+name+'.')){
                    $.ajax({
                        url:"{{ route('admin.member.suspendingdMember') }}",
                        method: 'post',
                        data: {id:id,name:name,email:email},
                        success:function(res){
                            // console.log(res.status);
                            if(res.state == 'success'){
                                $('.sus-table').load(location.href+' .sus-table');
                                toastr.options = {
                                    "closeButton": true,
                                    "progressBar": true,
                                    "positionClass": "toast-bottom-right",
                                    "timeOut": "2000",
                                }
                                toastr.success(name+' has been suspended.');
                                if($('.sus-table').load(location.href+' .sus-table')){
                                    $.ajax({
                                        url:"{{ route('admin.member.suspendedMemberMail') }}",
                                        method: 'post',
                                        data: {id:id,name:name,email:email},
                                    });
                                }
                            }
                        },
                        error:function(res){

                        }
                    });
                }
            });

            // Unsuspend code
            $(document).on('click', '#unsuspend', function(e){
                e.preventDefault();

                let id = $(this).data('id');
                let name = $(this).data('name');
                let email = $(this).data('email');

                if(confirm('Are you sure to unsuspend '+name+'.')){
                    $.ajax({
                        url:"{{ route('admin.member.unsuspendingdMember') }}",
                        method: 'post',
                        data: {id:id,name:name,email:email},
                        success:function(res){
                            // console.log(res.status);
                            if(res.state == 'success'){
                                $('.sus-table').load(location.href+' .sus-table');
                                toastr.options = {
                                    "closeButton": true,
                                    "progressBar": true,
                                    "positionClass": "toast-bottom-right",
                                    "timeOut": "2000",
                                }
                                toastr.success(name+' has been unsuspended.');
                                if($('.sus-table').load(location.href+' .sus-table')){
                                    $.ajax({
                                        url:"{{ route('admin.member.unsuspendedMemberMail') }}",
                                        method: 'post',
                                        data: {id:id,name:name,email:email},
                                    });
                                }
                            }
                        },
                        error:function(res){

                        }
                    });
                }
            });
        });

    </script>

@endsection


{{-- {{ dd($pandingUser)->toarray() }} --}}
