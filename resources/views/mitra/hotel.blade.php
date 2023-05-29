@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="/css/homepage.css">
<section class="hero text-white">
  <figure class="quote text-center fw-bold">
    <blockquote class="blockquote">
      <p class="p-5" style="font-size: 2rem;">Hai, Nama Hotel</p>
    </blockquote>
  </figure>
  
  <div class="container p-3">
  <!-- tab hotel & pesawat -->
    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist"> 
      <li class="nav-item">
        <a class="nav-link active" id="pesawat-tab" data-toggle="tab" href="#pesawat" role="tab" aria-controls="pesawat" aria-selected="true">
        <i class="uil uil-bed"></i>
            Kamar Hotel
        </a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">
        <i class="uil uil-inbox"></i>
            Pesanan
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
          <h3 class="lab mt-3">Kamar Hotel</h3>
          </div>
        </form>                   
      </div>
  
      <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
        <form class="d-flex flex-column align-items-center">
          <!-- ISI LIST $kamar_hotels -->
          <div class="container">
          <link href="/css/role.css" rel="stylesheet">
        <div class="row align-items-center">

            <div class="alert alert-success mt-3">
                <p>message</p>
            </div>


        <table class="table table-bordered mt-3">
            <tr>
                <th>No Pesanan</th>
                <th>Kamar</th>
                <th>Pemesan</th>
                <th>Harga</th>
                <th>Tanggal</th>
                <th>Telepon</th>
                <th width="280px">Action</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <form action="/" method="POST">

                        <a class="btn btn-info" href="/">Show</a>
                        <a class="btn btn-primary" href="/">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </table>
        
          </div>
        </form>
      </div>
    </div>
  </div>
</section>    
@endsection

