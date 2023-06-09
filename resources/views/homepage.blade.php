@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/homepage.css">
<section class="hero text-white">
  <figure class="quote text-center fw-bold">
    <blockquote class="blockquote">
      <p class="p-5" style="font-size: 2rem;">Hai! Mau cari apa?</p>
    </blockquote>
  </figure>
  
  <div class="container p-3">
  <!-- tab hotel & pesawat -->
    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist"> 
      <li class="nav-item">
        <a class="nav-link active" id="pesawat-tab" data-toggle="tab" href="#pesawat" role="tab" aria-controls="pesawat" aria-selected="true">
          <i class="uil uil-plane-departure fs-2"></i>
            Pesawat
        </a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">
          <i class="uil uil-building fs-2"></i>
            Hotel
        </a>
      </li>
    </ul>
  
    <!-- isi tabs-->
        
    <div class="tab-content bg-white border border-secondary border-1 rounded p-3 shadow text-black" id="myTabContent">
      <div class="tab-pane fade show active" id="pesawat" role="tabpanel" aria-labelledby="pesawat-tab">
        <!-- <h3 class="lab mt-3">Penerbangan</h3>   -->
        <form class="d-flex flex-column align-items-center">    
          <!-- ISI LIST PENERBANGAN -->
          <div class="container">
          <h3 class="lab mt-3">Penerbangan</h3>
          @foreach ($tiket_penerbangans as $tiket_penerbangan)
            <div class="card mb-3 shadow">
              <div class="card-body">
                <div class="row align-items-center mb-3">
                  <div class="col">
                    <h5 class="card-title fw-bold">{{ $tiket_penerbangan->kode_pesawat }} - {{ $tiket_penerbangan->model_pesawat }}</h5>
                  </div>
                  <div class="col text-start fw-bold fs-5">
                    {{ $tiket_penerbangan->maskapai }}
                  </div>
                </div>
                <div class="row align-items-center fs-5">
                  <div class="col">
                    <p class="card-text col">{{ $tiket_penerbangan->asal }} - {{ $tiket_penerbangan->tujuan }}</p>
                  </div>
                  <div class="col">
                    <p class="card-text col">Kelas: {{ $tiket_penerbangan->kelas }}</p>
                  </div>
                </div>
                <div class="row align-items-center mt-2">
                  <div class="col">
                    <p class="card-text col">Jam Berangkat: {{ $tiket_penerbangan->jam_berangkat }}</p>
                  </div>
                  <div class="col">
                    <p class="card-text col">Jam Tiba: {{ $tiket_penerbangan->jam_tiba }}</p>
                  </div>
                </div>
                <div class="row align-items-center mt-2">
                  <div class="col">
                    <p class="card-text">Tanggal: {{ $tiket_penerbangan->tanggal }}</p>
                  </div>
                  <div class="col">
                    <p class="card-text">Harga: Rp {{ $tiket_penerbangan->harga }}</p>
                  </div>
                </div>

                <div class="row mt-2">
                  <div class="col">
                    <p class="card-text">status : {{ $tiket_penerbangan->status }}</p>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col text-end">
                    <a href={{ route('pesanan.tiket', ['id' => $tiket_penerbangan->id]) }} class="btn btn-primary rounded-pill">Pesan Sekarang</a>
                  </div>
                </div>
              </div> 
            </div>
          @endforeach
          </div>
        </form>                   
      </div>
  
      <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
        <form class="d-flex flex-column align-items-center">
          <!-- ISI LIST $kamar_hotels -->
          <div class="container">
          <h3 class="lab mt-3">Hotel</h3>
            @foreach ($kamar_hotels as $kamar_hotel)
            <div class="card mb-3 shadow">
              <div class="card-body">
                <div class="row align-items-center mb-3">
                  <div class="col">
                    <h5 class="card-title fw-bold fs-4">{{ $kamar_hotel->nama_kamar }}</h5>
                  </div>
                  <div class="col text-start fs-5 fw-bold">
                    {{ $kamar_hotel->hotel }}
                  </div>
                </div>
                <p class="text-truncate">Fasilitas : {{ $kamar_hotel->fasilitas }} </p>
                <div class= "row align-items-center mt-3 fs-5">
                  <p class="card-text col">lokasi</p>
                  <p class="card-text col">Harga</p>
                </div>
                <div class= "row align-items-center">
                  <p class="card-text col">{{ $kamar_hotel->lokasi }}</p>
                  <p class="card-text col">Rp {{ $kamar_hotel->harga }}</p>
                </div>

                <div class= "row">
                  <div class= "col text-end">
                    <a href={{ route('pesanan.kamar', ['id' => $kamar_hotel->id]) }} class="btn btn-primary rounded-pill">Pesan Sekarang</a>
                  </div>
                </div>
              </div> 
            </div>
            @endforeach
          </div>
        </form>
      </div>
    </div>
  </div>
</section>    
@endsection

