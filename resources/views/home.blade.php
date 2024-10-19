<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko IoT - Terlengkap dan Terbaik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar-brand,
        .nav-link {
            color: #ffffff !important;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .footer a {
            color: #ffc107;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Toko IoT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h1 class="text-center mb-4">Toko IoT Terlengkap</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <img src="{{ asset('assets/img/arduino_uno.jpeg') }}" class="card-img-top" alt="Arduino Uno">
                    <div class="card-body">
                        <h5 class="card-title text-center">Arduino Uno Dip</h5>
                        <p class="card-text text-center text-muted">Rp. 500</p>
                        <p class="card-text">Arduino Uno DIP adalah papan mikrokontroler dengan mikrokontroler ATmega328 AVR dual-inline-package (DIP) yang dapat dilepas. Cocok untuk proyek IoT dan eksperimen teknologi.</p>
                        <form action="/checkout" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="quantity" class="form-label fw-bold">Mau Pesan Berapa?</label>
                                <input type="number" name="quantity" class="form-control" id="quantity"
                                    placeholder="Masukkan jumlah yang dipesan" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Nama Pembeli</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label fw-bold">No Telepon</label>
                                <input type="number" name="phone" class="form-control" id="phone"
                                    placeholder="Masukkan No Telp" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label fw-bold">Alamat</label>
                                <textarea name="address" class="form-control" id="address" rows="3" placeholder="Masukkan Alamat Anda" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Beli Sekarang!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center">
        <div class="container">
            <p class="mb-0">© 2024 Toko IoT - Semua Hak Dilindungi. <a href="#">Kebijakan Privasi</a> | <a href="#">Syarat & Ketentuan</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
