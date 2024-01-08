<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>For A Smile</title>
    <style>
        /* Animasi fade-in */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* Tambahkan animasi pada elemen yang ingin di-animasikan */
        .animated-fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        /* Latar belakang untuk bagian "Kontak Sosial Media" */
        .social-media-section {
            background: #d8d4d4;
            color: rgb(54, 49, 49);
            padding: 40px 0;
        }

        /* Ganti warna teks agar terlihat pada latar belakang */
        .social-media-section a {
            color: white;
        }

        /* Navbar style */
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.5rem;
        }

        .navbar-nav .nav-link {
            color: #495057;
        }

        .navbar-nav .nav-link:hover {
            color: #b3b6b9;
        }

        /* Main section style */
        .main-section {
            margin-top: 50px;
        }

        /* Footer style */
        footer {
            background-color: #343a40;
            color: rgb(220, 218, 218);
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Background image */
        body {
            background-image: url('your-background-image.jpg'); /* Replace 'your-background-image.jpg' with the path to your image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #495057; /* Set the text color for better visibility on the background image */
            font-family: 'Arial', sans-serif;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="home">For A Smile</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="tentang">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="informasi">Informasi Donasi</a>
                </li>
                <a class="nav-link" href="create">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="transaksi">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 animated-fade-in">
                <h1>Selamat Datang Di Website Sedekah Online</h1>
                <img src="{{ asset('image/logo1.png') }}" class="d-block w-20"
                    style="max-width: 50%; height: auto; margin-bottom: 20px;">
                <p>Online For A Smile</p>
            </div>
            <div class="col-md-4 animated-fade-in">
                <h3>Dokumentasi</h3>
                <ul class="list-group">
                    <li class="list-group-item"><a href="berbagimakanan">Berbagi Makanan</a></li>
                <li class="list-group-item"><a href="bazar">Bazar</a></li>
                <li class="list-group-item"><a href="santunan">Santunan</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Bagian "Kontak Sosial Media" -->
    <div class="social-media-section mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Temukan Kami di Media Sosial</h2>
                    <p>Ikuti kami di Instagram, Facebook, dan YouTube untuk mendapatkan pembaruan terbaru.</p>
                    <a href="https://www.instagram.com/for_a_smile__" class="btn btn-primary" target="_blank">Instagram</a>
                    <a href="https://www.facebook.com/UntukSebuah senyuman" class="btn btn-primary" target="_blank">Facebook</a>
                    <a href="https://www.youtube.com/" class="btn btn-primary" target="_blank">YouTube</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>