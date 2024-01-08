<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>For A Smile</title>
    <style>
        /* Add your custom styles here */

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
            font-size: 1.5rem; /* Ganti ukuran font sesuai keinginan Anda */
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

        /* Adjust card size */
        .card {
            max-width: 300px;
            margin: 0 auto;
            cursor: pointer; /* Menambahkan pointer saat kursor berada di atas kartu */
        }

        /* Adjust card image size */
        .card img {
            height: 200px;
            object-fit: cover;
    }
        .text-center {
         text-align: center;
         font-size: 30px; /* Sesuaikan ukuran font sesuai kebutuhan Anda */
         margin:  50px;
       }
           /* Adjust card size */
           .card {
            max-width: 300px;
            margin: 0 auto;
            cursor: pointer; /* Menambahkan pointer saat kursor berada di atas kartu */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan untuk efek shadow */
       }

        /* Adjust card image size */
           .card img {
            height: 200px;
             object-fit: cover;
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
                    <a class="nav-link" href="login">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <h2 class="text-center">Donasi Yang Masuk</h2>
        <div class="row">
            @foreach($images as $image)
                <div class="col-md-4 mb-4">
                    <div class="card h-100" data-toggle="modal" data-target="#imageModal{{ $loop->index }}">
                        <img src="{{ asset($image->image_path) }}" class="card-img-top" alt="{{ $image->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $image->title }}</h5>
                            <p class="card-text">{{ $image->description }}</p>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="imageModal{{ $loop->index }}" tabindex="-1" role="dialog"
                        aria-labelledby="imageModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imageModalLabel">{{ $image->title }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset($image->image_path) }}" class="img-fluid"
                                        alt="{{ $image->title }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
