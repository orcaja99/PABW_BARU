<<<<<<< HEAD
@extends('layouts.app')
=======
@extends ('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="/css/pesan.css">
>>>>>>> origin/fe

@section('content')
	<div class="container mt-5">
		<div class="card">
			<div class="card-header">
				<h4>E-Ticket</h4>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<h5>Informasi Penerbangan</h5>
						<hr>
						<p><strong>Nomor Penerbangan:</strong> AA123</p>
						<p><strong>Tanggal Keberangkatan:</strong> 1 Juni 2023 </p>
						<p><strong>Waktu Keberangkatan:</strong> 9:00 AM</p>
						<p><strong>Waktu Kedatangan:</strong> 11:10 AM</p>
					</div>
					<div class="col-md-6">
						<h5>Informasi Penumpang</h5>
						<hr>
						<p><strong>Nama:</strong> Fauzan Maftuh </p>
						<p><strong>Nomor Kursi:</strong> 15A</p>
						<p><strong>Kelas:</strong> Ekonomi</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 mt-3">
						<h5>Itinerary Penerbangan</h5>
						<hr>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Asal</th>
									<th>Tujuan</th>
									<th>Waktu Keberangkatan</th>
									<th>Waktu Kedatangan</th>
									<th>Durasi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Balikpapan (BPN)</td>
									<td>Jakarta (CGK)</td>
									<td>9:00 AM</td>
									<td>11:00 AM</td>
									<td>2j 10mnt</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<<<<<<< HEAD
@endsection
=======


<footer class="text-white py-2">
    <div class="container mt-1 d-flex justify-content-center">
        <a class="navbar-brand" href="#">
            <img src="img/TicketIn.png" alt="Logo" width="100" height="22" class="d-inline-block align-text-top">
            2023
        </a>
    </div>
</footer>
@endsection
>>>>>>> origin/fe
