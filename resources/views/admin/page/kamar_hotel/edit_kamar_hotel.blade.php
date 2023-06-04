@extends('admin.admin-home')

@section('admin-content') 
<section class="p-3">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
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
                    <strong>Nama Kamar:</strong>
                    <input type="text" name="nama_kamar" value="{{ $kamar_hotel->nama_kamar }}" class="form-control" placeholder="Nama Kamar">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Hotel:</strong>
                    <input type="text" name="hotel" value="{{ $kamar_hotel->hotel }}" class="form-control" placeholder="Hotel">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Lokasi:</strong>
                    <input type="text" name="lokasi" value="{{ $kamar_hotel->lokasi }}" class="form-control" placeholder="Lokasi">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Fasilitas:</strong>
                    <textarea name="fasilitas" class="form-control"  rows="3" style="height: 100px; resize:none;" name="detail" placeholder="hotel"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Tanggal:</strong>
                    <input type="number" name="tanggal" value="{{ $kamar_hotel->tanggal }}" class="form-control" placeholder="Tanggal">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Harga:</strong>
                    <input type="number" name="harga" value="{{ $kamar_hotel->harga }}" class="form-control" placeholder="Harga">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Fasilitas:</strong>
                    <input type="text" name="fasilitas" value="" class="form-control" placeholder="Fasilitas">
                </div>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
              <button type="submit" class="btn btn-primary rounded-pill text-white">Submit</button>
            </div>
        </div>
   
    </form>

    <div class="mt-5 d-flex justify-content-end">
        <a class="btn btn-primary rounded-pill text-white" href="{{ route('kamar_hotels.index') }}"> Back</a>
    </div>
    
</section>
@endsection