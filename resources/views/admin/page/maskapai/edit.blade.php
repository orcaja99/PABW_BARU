@extends('admin.admin-home')

@section('admin-content') 
<section class="p-3">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Maskapai</h2>
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
  
    <form action="" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Maskapai:</strong>
                    <input type="text" name="nama_kamar" value="" class="form-control" placeholder="Nama Kamar">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Email</strong>
                    <input type="text" name="hotel" value="" class="form-control" placeholder="Hotel">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Alamat</strong>
                    <input type="text" name="fasilitas" value="" class="form-control" placeholder="Fasilitas">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Telepon</strong>
                    <input type="text" name="fasilitas" value="" class="form-control" placeholder="Fasilitas">
                </div>
            </div>
                
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
              <button type="submit" class="btn btn-primary rounded-pill text-white">Submit</button>
            </div>
        </div>
   
    </form>

    <div class="mt-5 d-flex justify-content-end">
        <a class="btn btn-primary rounded-pill text-white" href=""> Back</a>
    </div>
    
</section>
@endsection