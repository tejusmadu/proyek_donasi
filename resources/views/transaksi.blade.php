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
            padding: 13px 15px; /* Atur padding agar tidak terlalu besar */
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

        /* Card form styles */
        .card-form {
            max-width: 400px;
            margin: auto;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-form .card-header {
            background-color: #858688;
            color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-form .card-body {
            padding: 20px;
        }

        .card-form label {
            font-weight: bold;
        }

        .custom-file-label::after {
            content: "Pilih file";
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
                    <a class="nav-link" href="login">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <div class="card card-form">
            <div class="card-header">
                <h5 class="card-title">Form Transaksi</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('transactions.store') }}" method="post" enctype="multipart/form-data">
                    @csrf <!-- CSRF Token -->
                    <div class="form-group">
                        <label for="bankName">Nama Bank</label>
                        <select class="form-control" id="bankName" name="bankName" onchange="showAccountField()" required>
                            <option value="" disabled selected>Pilih Bank</option>
                            <option value="DANA">DANA</option>
                            <option value="BNI">BNI</option>
                            <option value="BRI">BRI</option>
                        </select>
                    </div>
                    <div class="form-group" id="accountField" style="display:none;">
                        <label for="accountNumber">Nomor Rekening</label>
                        <input type="text" class="form-control" id="accountNumber" name="nomor_rekening"
                            placeholder="Masukkan nomor rekening" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="uploadBukti">Unggah Bukti Pembayaran</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="uploadBukti" name="uploadBukti" required>
                            <label class="custom-file-label" for="uploadBukti">Pilih file</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <!-- Your existing footer content remains unchanged -->
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function showAccountField() {
            var selectedBank = document.getElementById("bankName").value;
            var accountField = document.getElementById("accountField");
            var accountNumber = document.getElementById("accountNumber");

            if (selectedBank === "DANA") {
                accountField.style.display = "block";
                accountNumber.value = "089636658471";
            } else if (selectedBank === "BNI") {
                accountField.style.display = "block";
                accountNumber.value = "1492754992";
            } else if (selectedBank === "BRI") {
                accountField.style.display = "block";
                accountNumber.value = "424001026560535";
            } else {
                accountField.style.display = "none";
            }
        }
    </script>
</body>

</html>
