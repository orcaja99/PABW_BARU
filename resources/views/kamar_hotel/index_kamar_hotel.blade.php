@extends('layouts.app')

@section('content')
<link href="/css/role.css" rel="stylesheet">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Menu CRUD Kamar Hotel</h2>
            </div>
            <div class="pull-right">
                @can('kamar_hotel-create')
                <a class="btn btn-success" href="{{ route('kamar_hotels.create') }}"> Masukkan Kamar Hotel</a>
                @endcan
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama hotel</th>
            <th>hotel</th>
            <th>tanggal</th>
            <th>harga</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kamar_hotels as $kamar_hotel)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $kamar_hotel->nama_kamar }}</td>
            <td>{{ $kamar_hotel->hotel }}</td>
            <td>{{ $kamar_hotel->tanggal }}</td>
            <td>{{ $kamar_hotel->harga }}</td>
            <td>
                <form action="{{ route('kamar_hotels.destroy',$kamar_hotel->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('kamar_hotels.show',$kamar_hotel->id) }}">Show</a>
                    @can('kamar_hotel-edit')
                    <a class="btn btn-primary" href="{{ route('kamar_hotels.edit',$kamar_hotel->id) }}">Edit</a>
                    @endcan

                    @csrf
                    @method('DELETE')
                    @can('kamar_hotel-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $kamar_hotels->links() !!}

@endsection