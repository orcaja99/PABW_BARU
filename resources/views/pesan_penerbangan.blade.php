<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/pesan.css">

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
    <h1 class= "p-5 text-center fs-3">Detail Pemesanan</h1>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
                <div class="row align-items-center mb-3">
                    <div class="col">
                        <h5 class="card-title">{{ $tiket_penerbangan['nama_tiket']}}</h5>
                    </div>
                    
                    <div class="col text-end fs-5">
                      {{ $tiket_penerbangan['maskapai']}}
                    </div>
                </div>
                
                <div class= "row align-items-center fs-6">
                    <p class="card-text col">{{ $tiket_penerbangan['harga']}}</p>
                    <p class="card-text col">{{ $tiket_penerbangan['tanggal']}}</p>
                </div>
                <div class= "row align-items-center">
                    <p class="card-text col">Harga</p>
                    <p class="card-text col">tanggal</p>
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
            <div class="form-group mt-3">
                <label for="kelas">Kelas Kabin:</label>
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
</body>

<footer class="text-white py-2">
    <div class="container mt-1 d-flex justify-content-center">
        <a class="navbar-brand" href="#">
            <img src="img/TicketIn.png" alt="Logo" width="100" height="22" class="d-inline-block align-text-top">
            2023
        </a>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs"></script>
</html>