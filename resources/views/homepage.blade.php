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
                    <h5 class="card-title">{{ $tiket_penerbangan->nama_tiket }}</h5>
                  </div>
                  <div class="col text-end fs-5">
                    {{ $tiket_penerbangan->maskapai }}
                  </div>
                </div>
                <div class= "row align-items-center mt-3 fs-5">
                  <p class="card-text col">tanggal</p>
                  <p class="card-text col">harga</p>
                </div>
                <div class= "row align-items-center">
                  <p class="card-text col">{{ $tiket_penerbangan->tanggal }}</p>
                  <p class="card-text col">Rp {{ $tiket_penerbangan->harga }}</p>
                </div>

                <div class= "row">
                  <div class= "col text-end">
                    <a href="#" class="btn btn-primary rounded-pill">Pesan Sekarang</a>
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
                    <h5 class="card-title">{{ $kamar_hotel->nama_kamar }}</h5>
                  </div>
                  <div class="col text-end fs-5">
                    {{ $kamar_hotel->hotel }}
                  </div>
                </div>
                <div class= "row align-items-center mt-3 fs-5">
                  <p class="card-text col">tanggal</p>
                  <p class="card-text col">harga</p>
                </div>
                <div class= "row align-items-center">
                  <p class="card-text col">{{ $kamar_hotel->tanggal }}</p>
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
  
<!-- memuat file bootstrap.js dan jQuery -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</section>    

  <footer class="text-white py-2">
    <div class="container mt-1 d-flex justify-content-center">
      <a class="navbar-brand" href="#">
        <img src="img/TicketIn.png" alt="Logo" width="100" height="22" class="d-inline-block align-text-top">
        2023
      </a>
    </div>
  </footer>

@endsection

