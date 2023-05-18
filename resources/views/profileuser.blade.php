<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/profileuserakunsaya.css">
    <title>Profile User</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <nav class="navbar navbar-dark" data-bs-theme="dark">
        <div class="container">

            <a class="navbar-brand" href="#">
                <img src="img/TicketIn.png" alt="TicketIn" width="120" height="26">
            </a>
            <!-- <button type="button" class="btn btn-success">Success</button> -->
            <button class="btn btn-light" type="submit">Keluar</button>

        </div>
    </nav>
</head>

<body>

    <!-- Example Code -->



    <div class="row">
        <div class="container text-center">
            <div class="row justify-content-evenly">
                <div class="col-4">
                    <div class="container text-center">
                        <div class="row row-cols-1">
                            <div class="col"><img src="\img\p.png" class="rounded-circle" width="150">Fauzan Maftuh Alwafi</div>
                            <div class="col">
                                <ion-icon name="wallet-outline" size="small"></ion-icon> TicketInPay</div>
                            <div class="col">
                                <ion-icon name="reader-outline" size="small"></ion-icon> Pesanan</div>
                            <div class="col">
                                <ion-icon name="receipt-outline" size="small"></ion-icon> Riwayat Pemesanan</div>
                            <div class="col">
                                <ion-icon name="log-out-outline" size="small"></ion-icon> Keluar Akun</div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <p class="text-start">Data Pribadi</p>
                    <div class="mb-3">
                        <p for="exampleFormControlInput1" class="text-start">Nama Lengkap</p>
                        <!-- <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label> -->
                        <input class="form-control" type="text" placeholder="Fauzan Maftuh Alwafi" aria-label="Disabled input example" disabled>
                    </div>
                    <div class="mb-3">
                        <p for="exampleFormControlInput1" class="text-start">Jenis Kelamin</p>
                        <!-- <label for="exampleFormControlTextarea1" class="form-label">Jenis Kelamin</label> -->
                        <input class="form-control" type="text" placeholder="Laki-laki" aria-label="Disabled input example" disabled>
                    </div>
                    <div class="mb-3">
                        <p for="exampleFormControlInput1" class="text-start">Tanggal Lahir</p>
                        <!-- <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label> -->
                        <div class="input-group">
                            <input type="text" aria-label="date" class="form-control" placeholder="08" disabled>
                            <input type="text" aria-label="month" class="form-control" placeholder="Juli" disabled>
                            <input type="text" aria-label="year" class="form-control" placeholder="2002" disabled>
                        </div>
                    </div>
                    <div class="mb-3">
                        <p for="exampleFormControlInput1" class="text-start">Email</p>
                        <!-- <label for="exampleFormControlTextarea1" class="form-label">Email</label> -->
                        <input class="form-control" type="text" placeholder="fauzanmaftuh74@gmail.com" aria-label="Disabled input example" disabled>
                    </div>
                    <div class="mb-3">
                        <p for="exampleFormControlInput1" class="text-start">Nomor Telepon</p>
                        <!-- <label for="exampleFormControlTextarea1" class="form-label">Nomor Telepon</label> -->
                        <input class="form-control" type="text" placeholder="0895705054048" aria-label="Disabled input example" disabled>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Example Code -->
</body>
<footer class="text-white py-2">
    <div class="container mt-1 d-flex justify-content-center">
        <a class="navbar-brand" href="#">
            <img src="img/TicketIn.png" alt="Logo" width="100" height="22" class="d-inline-block align-text-top">&#169; 2023, Kelompok 5 PABW B
        </a>
    </div>
</footer>

</html>