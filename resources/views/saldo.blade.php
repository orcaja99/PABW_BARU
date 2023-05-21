@extends('layouts.app')

@section('content')
<link href=/css/profileuserakunsaya.css rel='stylesheet' type='text/css'>
<div class="row gx-5">
        <div class="container text-center">
            <div class="row justify-content-evenly">
                <div class="col-4">
         <div class="p-5">
          <div class="card" style="width: 20dp; ">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">{{ Auth::user()->name }}</li>
              <li class="list-group-item">TicketInPay</li>
              <li class="list-group-item">Pesanan</li>
              <li class="list-group-item">Riwayat Pemesanan</li>
            </ul>
          </div>
         </div>
        </div>
        <div class="col">
          <div class="p-5">
            <div class="card" style="width: 20dp;">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">TicketinPay</li>
                <label for="exampleFormControlInput1" class="form-label">Saldo</label>
                <li class="list-group-item"><input class="form-control" type="text" placeholder="{{ Auth::user()->name }}" aria-label="Disabled input example" disabled></li>
                <!-- <label for="exampleFormControlInput1" class="form-label">Email</label>
                <li class="list-group-item"><input class="form-control" type="text" placeholder="{{ Auth::user()->email }}" aria-label="Disabled input example" disabled></li>
                <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                <select class="form-control" id="dropdown" name="dropdown">
                  <option value="option1">Laki-laki</option>
                  <option value="option2">Perempuan</option>
                </select>
                <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal" class="form-control" style="height:50px" placeholder="tanggal">
                <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                <input type="number" class="form-control"> -->
              </ul>
            </div>
            </div>
            </div>
        </div>
<!-- <div class="container overflow-hidden text-center">
      
      <div class="row gx-5">
        <div class="col">
         <div class="p-5">
          <div class="card" style="width: 20dp;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">{{ Auth::user()->name }}</li>
              <li class="list-group-item">TicketInPay</li>
              <li class="list-group-item">Pesanan</li>
              <li class="list-group-item">Riwayat Pemesanan</li>
            </ul>
          </div>
         </div>
        </div>
        <div class="col">
          <div class="p-5">
            <div class="card" style="width: 20dp;">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Data Pribadi</li>
                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                <li class="list-group-item"><input class="form-control" type="text" placeholder="{{ Auth::user()->name }}" aria-label="Disabled input example" disabled></li>
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <li class="list-group-item"><input class="form-control" type="text" placeholder="{{ Auth::user()->email }}" aria-label="Disabled input example" disabled></li>
                <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                <select class="form-control" id="dropdown" name="dropdown">
                  <option value="option1">Laki-laki</option>
                  <option value="option2">Perempuan</option>
                </select>
                <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal" class="form-control" style="height:50px" placeholder="tanggal">
                <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                <input type="number" class="form-control">
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> -->

        <!-- End Example Code -->
</body>
<footer class="text-white py-2">
    <div class="container mt-1 d-flex justify-content-center">
        <a class="navbar-brand" href="#">
            <img src="img/TicketIn.png" alt="Logo" width="100" height="22" class="d-inline-block align-text-top">&#169; 2023, Kelompok 5 PABW B
        </a>
    </div>
</footer>
@endsection