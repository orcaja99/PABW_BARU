@extends('layouts.app')
   
@section('content')
<link href="/css/role.css" rel="stylesheet">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kamar_hotels.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('kamar_hotels.update',$kamar_hotel->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nama kamar:</strong>
                    <input type="text" name="nama_kamar" value="{{ $kamar_hotel->nama_kamar }}" class="form-control" placeholder="nama kamar">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>hotel:</strong>
                    <input type="text" name="hotel" value="{{ $kamar_hotel->hotel }}" class="form-control" placeholder="hotel">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tanggal:</strong>
                    <input type="date" name="tanggal" value="{{ $kamar_hotel->tanggal }}" class="form-control" placeholder="tanggal">
                </div>
            </div> 

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>harga:</strong>
                    <input type="number" name="harga" value="{{ $kamar_hotel->harga }}" class="form-control" placeholder="harga">
                </div>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection