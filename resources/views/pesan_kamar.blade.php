@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/pesan.css">
<section>
  <h1 class= "p-5 text-center fs-3">Detail Pemesanan </h1>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
                <div class="row align-items-center mb-3">
                
                    <div class="col">
                        <h5 class="card-title">{{ $kamar_hotels['nama_kamar']}}</h5>
                    </div>
                    
                    <div class="col text-end fs-5">
                      {{ $kamar_hotels['hotel']}}
                    </div>
                </div>
                
                <div class= "row align-items-center fs-6">
                    <p class="card-text col">harga</p>
                    <p class="card-text col">tanggal</p>
                </div>
                <div class= "row align-items-center">
                    <p class="card-text col">{{ $kamar_hotels['harga']}}</p>
                    <p class="card-text col">{{ $kamar_hotels['tanggal']}}</p>
                </div>
                </div>
            </div>
          </div>

        <div class="col-md-8">
          <form>
            <div class="form-group ">
              <label for="namalengkap">Nama Lengkap</label>
              <input type="email" class="form-control" id="namalengkap" aria-describedby="emailHelp" placeholder="Masukan nama lengkap Anda" />
            </div>
            <div class="form-group mt-3">
                <label for="jk">Jenis Kelamin</label>
                <select name="jenisk" class="form-control" id="jk">
                <option value="l">Laki-Laki</option>
                <option value="p">Perempuan</option>
                </select>
            </div>
            <div class="form-group mt-3">
              <label for="exampleInputEmail1">Alamat Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan email Anda" />
            </div>

            <button type="submit" class="btn btn-primary rounded-pill mt-3">Pesan</button>
          </form>
        </div>
      </div>
    </div>
</section>
@endsection