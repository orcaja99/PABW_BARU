@extends('admin.admin-home')

@section('admin-content')
<div class='row'>
    <div class="col-lg-12 margin-tb">
        <div class='pull-left'>
            <h2>Daftar Tiket Penerbangan</h2>
        </div>
        <div class='pull-right'>
            @can('tiket_penerbangan-create')
            <a class='btn btn-success' href="{{ route('tiket_penerbangans.create') }}">Tambah Tiket Penerbangan</a>
            @endcan
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class='alert alert-success'>
    <p>{{ $message }}</p>
</div>
@endif

<table class='table table-bordered'>
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Model</th>
        <th>Kelas</th>
        <th>Asal</th>
        <th>Tujuan</th>
        <th>Waktu Berangkat</th>
        <th>Waktu Sampai</th>
        <th>Maskapai</th>
        <th>Tanggal</th>
        <th>Harga</th>
        <th>status</th>
        <th width='280px'>Action</th>
    </tr>
    @foreach ($tiket_penerbangans as $tiket_penerbangan)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $tiket_penerbangan->kode_pesawat }}</td>
        <td>{{ $tiket_penerbangan->model_pesawat }}</td>
        <td>{{ $tiket_penerbangan->kelas }}</td>
        <td>{{ $tiket_penerbangan->asal }}</td>
        <td>{{ $tiket_penerbangan->tujuan }}</td>
        <td>{{ $tiket_penerbangan->jam_berangkat }}</td>
        <td>{{ $tiket_penerbangan->jam_tiba }}</td>
        <td>{{ $tiket_penerbangan->maskapai }}</td>
        <td>{{ $tiket_penerbangan->tanggal }}</td>
        <td>{{ $tiket_penerbangan->harga }}</td>
        <td>{{ $tiket_penerbangan->status }}</td>
        <td>
            <form action="{{ route('tiket_penerbangans.destroy',$tiket_penerbangan->id) }}" method='POST'>
                <a class='btn btn-info' href="{{ route('tiket_penerbangans.show',$tiket_penerbangan->id) }}">Show</a>
                @can('tiket_penerbangan-edit')
                <a class='btn btn-primary' href="{{ route('tiket_penerbangans.edit',$tiket_penerbangan->id) }}">Edit</a>
                @endcan

                @csrf
                @method('DELETE')
                @can('tiket_penerbangan-delete')
                <button type='submit' class='btn btn-danger'>Delete</button>
                @endcan
            </form>
        </td>
    </tr>
    @endforeach

</table>
    
    {!! $tiket_penerbangans->links() !!}

@endsection