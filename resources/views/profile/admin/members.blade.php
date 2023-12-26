@extends('profile.admin.layout')

@section('adminMainContent')
    <div class="p-3">
        <h2 class="text-center">All Members</h2>
        <hr/>
        <table class="table table-striped">
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
                        <a href="#" class="btn btn-primary btn-sm m-1">Suspend</a>                        
                        <a href="#" class="btn btn-danger btn-sm m-1">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    
@endsection

{{-- {{ dd($pandingUser)->toarray() }} --}}