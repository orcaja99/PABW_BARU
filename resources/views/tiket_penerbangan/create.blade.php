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
                <strong>Nama Tiket:</strong>
                <input type='text' name='nama_tiket' class='form-control' placeholder='nama tiket'>
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