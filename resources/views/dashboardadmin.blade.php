<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
          body {
            font-family: "Arial", sans-serif;
            background-color: #efefef;
        }

        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #d2d2d2; /* New background color (abu abu) */
        }

        .nav-link {
            color: #333;
        }

        .nav-link:hover {
            color: #007bff;
        }

        .main-content {
            margin-left: 200px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="">
                                <i class="bi bi-speedometer2"></i> Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="riwayat">
                                <i class="bi bi-clock-history"></i> Riwayat Login 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="riwayatransaksi">
                                <i class="bi bi-receipt"></i> Bukti transaksi
                            </a>
                            <li class="nav-item">
                                <a class="nav-link" href="contacts">
                                    <i class="bi bi-receipt"></i> Riwayat data kontak
                                </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inputdata">
                                <i class="bi bi-receipt"></i> Input data 
                            </a>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-10 main-content">
                <h1>Selamat Datang Di Dashboard Admin</h1>
                <!-- Your main content here -->
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
