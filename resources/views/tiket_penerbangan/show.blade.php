@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Tiket Penerbangan</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('tiket_penerbangan.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-12 col-sm-12">
        <div class="form-group">
            <strong>Nama Maskapai:</strong>
            {{ $tiket_penerbangan->nama_maskapai }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12">
            <strong>Maskapai:</strong>
            {{ $tiket_penerbangan->maskapai }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12">
            <strong>Tanggal:</strong>
            {{ $tiket_penerbangan->tanggal }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12">
            <strong>Harga:</strong>
            {{ $tiket_penerbangan->harga }}
        </div>
    </div>
</div>
@endsection