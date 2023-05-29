@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/pesan.css">
<section>
  <h1 class="p-5 text-center fs-3">Detail Pemesanan</h1>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-4">
        <div class="card  bg-dark text-white">
          <div class="card-body">
            <div class="row align-items-center mb-5">
              <div class="col">
                <h5 class="card-title fw-bold text-uppercase">{{ $tiket_penerbangans->model_pesawat }}</h5>
                <p class="card-text">{{ $tiket_penerbangans->kelas }}</p>
                <p class="card-text">{{ $tiket_penerbangans->asal }} - {{ $tiket_penerbangans->tujuan }}</p>
                <p class="card-text">{{ $tiket_penerbangans->jam_berangkat }} - {{ $tiket_penerbangans->jam_tiba }}</p>
              </div>
              <div class="col text-start fs-4 text-uppercase fw-bold">
                {{ $tiket_penerbangans->maskapai }}
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col">
                <p class="card-text">Harga</p>
              </div>
              <div class="col">
                <p class="card-text">Tanggal</p>
              </div>
            </div>
            <div class="row align-items-center fs-6">
              <div class="col">
                <p class="card-text">{{ $tiket_penerbangans->harga }}</p>
              </div>
              <div class="col">
                <p class="card-text">{{ $tiket_penerbangans->tanggal }}</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <form>
          <div class="form-group">
            <label for="namalengkap">Nama Lengkap</label>
            <input type="text" class="form-control" id="namalengkap" placeholder="Masukkan nama lengkap Anda">
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
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan email Anda">
          </div>
          <div class="form-group mt-3">
            <label for="kelas">Kelas Kabin</label>
            <select name="kelas" class="form-control" id="kelas">
              <option value="Ekonomi">Ekonomi</option>
              <option value="Bisnis">Bisnis</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary rounded-pill mt-3">Pesan</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection