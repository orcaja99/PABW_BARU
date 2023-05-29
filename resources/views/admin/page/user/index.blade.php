@extends('admin.admin-home')

@section('admin-content')
<section class="p-3">
    <link href="/css/role.css" rel="stylesheet">
        <div class="row align-items-center">
            <div class="col-lg-12 d-flex justify-content-center">
                <h2>Users</h2>
            </div>
        </div>

            <div class="alert alert-success mt-3">
                <p>message</p>
            </div>


        <table class="table table-bordered mt-3">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th width="280px">Action</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <form action="/" method="POST">

                        <a class="btn btn-info" href="/">Show</a>
                        <a class="btn btn-primary" href="/">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </table>
    </section>
@endsection