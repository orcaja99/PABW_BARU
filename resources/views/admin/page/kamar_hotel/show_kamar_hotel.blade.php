
@extends('layouts.app')
@section('content')
<link href="/css/role.css" rel="stylesheet">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>kamar hotel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kamar_hotels.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $kamar_hotel->nama_kamar }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>hotel:</strong>
                {{ $kamar_hotel->hotel }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>tanggal:</strong>
                {{ $kamar_hotel->tanggal }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>harga:</strong>
                {{ $kamar_hotel->harga }}
            </div>
        </div>
    </div>
@endsection