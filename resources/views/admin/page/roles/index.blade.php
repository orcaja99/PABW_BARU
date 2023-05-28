@extends('admin.admin-home')

@section('admin-content')
<section class="p-3">
    <link href=/css/role.css rel='stylesheet' type='text/css'>
    <div class="row align-items-center">
        <div class="col-lg-12 mx-auto p-2">
            <div class="col-lg-12 d-flex justify-content-center">
                <h2>Role Management</h2>
            </div>
            <div class="col-lg-12 text-right mt-3">
            @can('role-create')
                <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
            @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
    <div class="alert alert-success mt-3">
        <p>{{ $message }}</p>
    </div>
    @endif


    <table class="table table-bordered mt-3">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th width="280px">Action</th>
    </tr>
        @foreach ($roles as $key => $role)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $role->name }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                @can('role-edit')
                    <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                @endcan
                @can('role-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                @endcan
            </td>
        </tr>
        @endforeach
    </table>
</section>
{!! $roles->render() !!}
@endsection