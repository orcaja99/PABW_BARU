@extends('admin.admin-home')

@section('admin-content')
<section class="p-3">
    <link href="/css/role.css" rel="stylesheet">
        <div class="row align-items-center">
            <div class="col-lg-12 d-flex justify-content-center">
                <h2>Kamar Hotel</h2>
            </div>
            <div class="col-lg-12 text-right mt-3 d-flex justify-content-end">
                @can('kamar_hotel-create')
                <a class="btn btn-success" href="{{ route('kamar_hotels.create') }}">Masukkan Kamar Hotel</a>
                @endcan
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
                <th>Nama Kamar</th>
                <th>Hotel</th>
                <th>Fasilitas</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($kamar_hotels as $kamar_hotel)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $kamar_hotel->nama_kamar }}</td>
                <td>{{ $kamar_hotel->hotel }}</td>
                <td>Fasilitas kamar disini</td>
                <td>Deskripsi kamar disini</td>
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
    </section>

    {!! $kamar_hotels->links() !!}

@endsection