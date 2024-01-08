<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            background: #e1dada;
            color: rgb(54, 49, 49);
            padding: 20px 0;
        }

        /* Ganti warna teks agar terlihat pada latar belakang */
        .social-media-section a {
            color: white;
        }

        /* Navbar style */
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 12px 15px; /* Atur padding agar tidak terlalu besar */
        }

        .navbar-brand {
            font-size: 1.2rem; /* Ganti ukuran font sesuai keinginan Anda */
        }

        .navbar-nav .nav-link {
            color: #495057;
        }
        .navbar-nav .nav-link:hover {
            color: #007bff;
        }
        /* Main section style */
        .main-section {
            margin-top: 20px;
            max-width: 400px; /* Tambahkan batas lebar maksimum untuk mengontrol lebar formulir */
            margin-left: auto;
            margin-right: auto;
            background-color: #fff; /* Tambahkan warna latar belakang formulir */
            padding: 20px; /* Tambahkan padding untuk meningkatkan ruang di sekitar formulir */
            border-radius: 10px; /* Tambahkan sudut melengkung pada formulir */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan untuk memberikan kedalaman */
        }

        /* Footer style */
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Background image */
        body {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #495057; /* Atur warna teks untuk visibilitas yang lebih baik pada gambar latar belakang */
            font-family: 'Arial', sans-serif;
            margin-bottom: 60px; /* Tambahkan margin-bottom untuk memberi ruang di bagian bawah */
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
                <li class="nav-item">
                    <a class="nav-link" href="create">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="transaksi">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container main-section">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <h2 class="text-center">Tambah Kontak</h2>
        <form method="POST" action="{{ route('store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon:</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat:</label>
                <textarea class="form-control" id="address" name="address" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="message">Pesan:</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Tambah Kontak</button>
        </form>
    </div>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
