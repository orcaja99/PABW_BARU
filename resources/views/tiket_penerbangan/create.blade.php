@extends('tiket_penerbangan.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Tambah Tiket Penerbangan</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('tiket_penerbangans.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>           
        @endforeach
    </ul>
@endif

<form action="{{ route('tiket_penerbangans.store') }}" method='POST'>
    @csrf
    <div class='row'>
        <div class='col-xs-12 col-sm-12 col-md-12'>
            <div class='form-group'>
                <strong>Kode:</strong>
                <input type='text' name='kode_pesawat' class='form-control' placeholder='nama tiket'>
            </div>

            <div class='form-group'>
                <strong>Model:</strong>
                <input type='text' name='model_pesawat' class='form-control' placeholder='model pesawat'>
            </div>

            <div class='form-group'>
                <strong>Kelas:</strong>
                <input type='text' name='kelas' class='form-control' placeholder='kelas'>
            </div>

            <div class='form-group'>
                <strong>Asal:</strong>
                <input type='text' name='asal' class='form-control' placeholder='asal'>
            </div>

            <div class='form-group'>
                <strong>Tujuan:</strong>
                <input type='text' name='tujuan' class='form-control' placeholder='tujuan'>
            </div>

            <div class="form-group">
                <strong>Waktu Keberangkatan:</strong>
                <input type='time' name='jam_berangkat' class='form-control' placeholder='waktu'>
            </div>

            <div class='form-group'>
                <strong>Waktu Kedatangan:</strong>
                <input type='time' name='jam_tiba' class='form-control' placeholder='waktu'>
            </div>


            <div class='form-group'>
                <strong>Maskapai:</strong>
                <input type='text' name='maskapai' class='form-control' placeholder='maskapai'>
            </div>

            <div class='form-group'>
                <strong>Tanggal:</strong>
                <input type='date' name='tanggal' class='form-control' placeholder='tanggal'>
            </div>

            <div class='form-group'>
                <strong>Harga:</strong>
                <input type='number' name='harga' class='form-control' placeholder='harga'>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
        </div>
    </div>
</form>
@endsection