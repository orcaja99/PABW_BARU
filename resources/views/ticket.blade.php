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
