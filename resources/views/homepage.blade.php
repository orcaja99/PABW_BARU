<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" type="text/css" href="/css/homepage.css">

    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->


    <nav class="navbar navbar-dark" data-bs-theme="dark">
      <div class="container">

        <a class="navbar-brand" href="#">
          <img src="img/TicketIn.png" alt="TicketIn" width="120" height="26">
        </a>

        <a  href="{{ url('/login') }}"><button class="btn btn-outline-success btn-rounded-white" type="submit">Masuk</button></a>

      </div>
    </nav>
  </head>

  <body>
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
  
<<<<<<< Updated upstream
        <!-- isi tabs-->
        <div class="tab-content bg-white border border-secondary border-1 rounded p-3 shadow text-black" id="myTabContent">
  
          <div class="tab-pane fade show active" id="pesawat" role="tabpanel" aria-labelledby="pesawat-tab">
            <h3 class="lab mt-3">Penerbangan</h3>
  
            <form class="d-flex flex-column align-items-center">
              
                <div class="col">
                  <label for="tanggal">Tanggal Pergi:</label>
                  <input type="date" name="tanggal" class="form-control" id="tanggal">
=======
      <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
        <!-- <h3 class="lab mb-10">Hotel</h3> -->
        <form class="d-flex flex-column align-items-center">
          <!-- ISI LIST $kamar_hotels -->
          
          <div class="container">
          <h3 class="lab mb-10">Hotel</h3>
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
>>>>>>> Stashed changes
                </div>
            
              <div class="form-row">
                <div class="form-group col mt-3">
                  <input class="btn btn-primary rounded-pill" type="submit" name="submit" id="flightsButton" value="Cari Tiket">
                </div>
              </div>
            </form>          
                   
          </div>
  
          <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
            <h3 class="lab mt-3">Hotel</h3>
  
            <form class="d-flex flex-column align-items-center">
              <div class="form-row row mb-3">
                <div class="form-group col ">
                  <label for="dest">Destinasi</label>
                  <select name="destinasi" class="form-control" id="dest">
                    <option value="Balikpapan">Balikpapan</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Surabaya">Surabaya</option>
                  </select>
                </div>
                <div class="form-group col">
                  <label for="tanggal">Tanggal Nginep:</label>
                  <input type="date" name="tanggal" class="form-control" id="tanggal">
                </div>
              </div>
            
              <div class="form-row">
                <div class="form-group col">
                  <input class="btn btn-primary" type="submit" name="submit" id="hotelButton" value="Cari Hotel">
                </div>
              </div>
            </form>
          </div>
  
        </div>
      </div>
  
      <!-- memuat file bootstrap.js dan jQuery -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
      </script>

    </section>

    <!-- <section class="about">

      <figure class="quote text-center fw-bold">
        <blockquote class="blockquote">
          <p class="p-5" style="font-size: 2rem;">About Us</p>
        </blockquote>
      </figure>
      
    </section> -->

    <section class='flight-lists pt-3'>

    <div class="container">
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
                  <a href="#" class="btn btn-primary rounded-pill">Pesan Sekarang</a>
                </div>
              </div>
            </div>
          
        </div>
    @endforeach
    </div>
    </section>


  </body>

  <footer class="text-white py-2">
    <div class="container mt-1 d-flex justify-content-center">
      <a class="navbar-brand" href="#">
        <img src="img/TicketIn.png" alt="Logo" width="100" height="22" class="d-inline-block align-text-top">&#169; 2023
      </a>
    </div>
  </footer>

</html>

