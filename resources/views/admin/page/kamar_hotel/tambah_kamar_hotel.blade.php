@extends('admin.admin-home')

@section('admin-content') 
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-start">
            <h2>Add New Product</h2>
        </div>
        <div class="float-end">
            <a class="btn btn-primary" href="{{ route('kamar_hotels.index') }}">Back</a>
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
   
<form action="{{ route('kamar_hotels.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama kamar:</strong>
                <input type="text" name="nama_kamar" class="form-control" placeholder="nama kamar">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Hotel:</strong>
                <input type="text"  name="hotel" class="form-control"  name="detail" placeholder="hotel">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Lokasi:</strong>
                <input type="text"  name="lokasi" class="form-control"  name="detail" placeholder="hotel">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Fasilitas:</strong>
                <textarea name="fasilitas" class="form-control"  rows="3" style="height: 100px; resize:none;" name="detail" placeholder="hotel"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Tanggal:</strong>
                <input type="date"  name="tanggal" class="form-control"  name="detail" placeholder="tanggal">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Harga:</strong>
                <input type="input[type=number]::-webkit-inner-spin-button {-webkit-appearance: none;}"  name="harga" class="form-control" name="detail" placeholder="harga">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection