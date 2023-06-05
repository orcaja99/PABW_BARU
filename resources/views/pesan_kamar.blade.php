@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/pesan.css">
<section>
  <h1 class= "p-5 text-center fs-3">Detail Pemesanan </h1>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-4">
          <div class="card bg-dark text-white">
            <div class="card-body">
                <div class="row align-items-center mb-3">
                
                    <div class="col">
                        <h5 class="card-title fw-bold">{{ $kamar_hotels['nama_kamar']}}</h5>
                    </div>
                    
                    <div class="col text-start fs-5 fw-bold">
                      {{ $kamar_hotels['hotel']}}
                    </div>
                </div>
                
                <div class= "row align-items-center fs-6">
                    <p class="card-text col">Tanggal</p>
                    <p class="card-text col">Harga</p>
                </div>
                <div class= "row align-items-center">
                    <p class="card-text col">{{ $kamar_hotels['tanggal']}}</p>
                    <p class="card-text col">{{ $kamar_hotels['harga']}}</p>
                </div>
                </div>
            </div>
          </div>

        <div class="col-md-8">
          <form action="{{ route('bookings.store') }}" method="POST">
            @csrf
            <div class="form-group ">
              <label for="iduser">id user</label>
              <input type="number" class="form-control" id="iduser" aria-describedby="emailHelp" placeholder="Masukan nama lengkap Anda" />
            </div>

            <div class="form-group ">
              <label for="idkamar">id kamar</label>
              <input type="number" class="form-control" id="idkamar" aria-describedby="emailHelp" placeholder="Masukan nama lengkap Anda" />
            </div>

            <div class="form-group ">
              <label for="namalengkap">Nama Lengkap</label>
              <input type="text" class="form-control" id="namalengkap" aria-describedby="emailHelp" placeholder="Masukan nama lengkap Anda" />
            </div>

            <div class="form-group ">
              <label for="jumlahbarang">jumlah barang</label>
              <input type="number" class="form-control" id="jumlahbarang" aria-describedby="emailHelp" placeholder="Masukan jumlah barang" />
            </div>

            <div class="form-group mt-3">
              <label for="nohp">no hp:</label>
              <input type="text" class="form-control" id="nohp" aria-describedby="emailHelp" placeholder="Masukan nomot hp" />
            </div>

            <button type="submit" class="btn btn-primary rounded-pill mt-3">Pesan</button>
          </form>
        </div>
      </div>
    </div>
</section>
<<<<<<< HEAD
@endsection
=======

@endsection
>>>>>>> origin/fe
