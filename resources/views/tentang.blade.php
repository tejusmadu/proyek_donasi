<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>For A Smile</title>
    <style>
       * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

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

        /* General styles */
        body {
            background-color: #f8f9fa;
            color: #495057;
        }

        /* Navbar styles */
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.5rem;
            color: #070c11;
        }

        .navbar-nav .nav-link {
            color: #495057;
            transition: color 0.3s ease-in-out;
        }

        .navbar-nav .nav-link:hover {
            color: #007bff;
        }

        /* Main section styles */
        .main-section {
            margin-top: 50px;
        }

        .main-section h1 {
            font-size: 2rem; /* Adjusted font size */
            color: #000; /* Changed color to black */
        }

        .main-section img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .main-section p {
            font-size: 1.2rem;
        }

        /* Sidebar styles */
        .sidebar h3 {
            font-size: 1.5rem;
            color: #007bff;
        }

        .sidebar a {
            color: #007bff;
        }

        .sidebar a:hover {
            text-decoration: underline;
        }

        /* Team section styles */
        .team-section {
            margin-top: 40px;
        }

        .team-section .row {
            display: flex;
            align-items: center;
            margin-bottom: 50px;
        }

        .team-section .image-container,
        .team-section .description-container {
            flex: 1;
            box-shadow: 0 0px 4px 0 rgba(0, 0, 0, 0.2);
            border-radius: 1px;
            overflow: hidden;
            border: 5px solid #ddd;
        }

        .team-section img {
            width: 100%;
            height: auto;
            max-height: 100%;
            border-radius: 5px;
            transition: transform 0.3s ease-in-out;
        }

        .team-section img:hover {
            transform: scale(1.1);
        }

        .team-section .description-container {
            padding: 20px;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .team-section .description-container h2,
        .team-section .description-container p {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .team-section .row:hover .description-container {
            opacity: 1;
        }

        .team-section .row:hover .description-container h2,
        .team-section .row:hover .description-container p {
            opacity: 1;
        }

        /* Social media section styles */
        .social-media-section {
            margin-top: 40px;
            padding: 40px 0;
            background: #dcd7d7;
        }

        .social-media-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #0d0c0c;
        }

        .social-media-section p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .social-media-section .btn {
            margin-right: 10px;
        }

        /* Footer styles */
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        
        /* Text styling */
        body {
            font-size: 16px;
            line-height: 1.6;
        }

        h1 {
            font-size: 2.5rem;
        }

        h2 {
            font-size: 2rem;
        }

        h3 {
            font-size: 1.8rem;
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
        <div class="row">
            <div class="col-md-8 animated-fade-in main-section">
                <h1 class="h2">Selamat Datang Di Bagian Tentang Kami</h1>
                <img src="{{ asset('image/logo1.png') }}" class="d-block w-50" alt="For A Smile Logo">
                <p>Sedekah Online For A Smile</p>
            </div>
            <div class="col-md-4 animated-fade-in sidebar">
                <h3>Dokumentasi</h3>
                <ul class="list-group">
                    <li class="list-group-item"><a href="berbagimakanan">Berbagi Makanan</a></li>
                <li class="list-group-item"><a href="bazar">Bazar</a></li>
                <li class="list-group-item"><a href="santunan">Santunan</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Team section -->
    <div class="container mt-5 team-section">
        <div class="row">
            <div class="image-container order-2 order-lg-1">
                <img src="{{ asset('image/info1.jpeg') }}" class="d-block w-100" alt="Team Member 1">
            </div>
            <div class="description-container order-1 order-lg-2">
                <h2>Tim Kami</h2>
                <p></p>
            </div>
        </div>

        <div class="row">
            <div class="description-container">
                <h2>Tim Kami</h2>
                <p></p>
            </div>
            <div class="image-container">
                <img src="{{ asset('image/info2.jpeg') }}" class="d-block w-100" alt="Team Member 2">
            </div>
        </div>

        <div class="row">
            <div class="image-container order-2 order-lg-1">
                <img src="{{ asset('image/info3.jpeg') }}" class="d-block w-100" alt="Team Member 3">
            </div>
            <div class="description-container order-1 order-lg-2">
                <h2>Tim Kami</h2>
                <p></p>
            </div>
        </div>

        <div class="row">
            <div class="description-container">
                <h2>Tim Kami</h2>
                <p></p>
            </div>
            <div class="image-container">
                <img src="{{ asset('image/info4.jpeg') }}" class="d-block w-100" alt="Team Member 4">
            </div>
        </div>
    </div>

    <!-- Social media section -->
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

    <footer>
        <!-- Your footer content -->
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
