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
            background-color: #f8f9fa;
        }

        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #AAAAAA; /* New background color (abu abu) */
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

        /* Additional Style */
        #table-container {
            width: 100%;
            overflow-x: auto;
            margin: 20px auto; /* Updated margin */
        }

        #table {
            width: 100%;
            margin-top: 20px; /* Updated margin */
        }
    </style>
</head>

<body>
    <div style="margin: auto;">
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
                        </li>
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
            <nav>
                <a href="" class="btn btn-primary">Tambahkan</a>
            </nav>
            <div style="margin: auto;">
                <h1>Data Terbaru</h1>

                <!-- Display success message -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div id="table-container">
                    <table id="table" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>
                                <th>DESKRIPSI</th>
                                <th>GAMBAR</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data Terbaru Loop -->
                            @foreach($images as $image)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $image->title }}</td>
                                    <td>{{ $image->description }}</td>
                                    <td>
                                        <button type="button" class="btn btn-link" data-toggle="modal"
                                            data-target="#imageModal{{ $loop->index }}">
                                            <img src="{{ asset($image->image_path) }}" alt="{{ $image->title }}"
                                                style="max-width: 100px; max-height: 100px;">
                                        </button>
                                    </td>
                                    <td>
                                        <a href="{{ route('inputdata.edit', $image->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <form action="{{ route('inputdata.destroy', $image->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="imageModal{{ $loop->index }}" tabindex="-1" role="dialog"
                                    aria-labelledby="imageModalLabel" aria-hidden="true">
                                    <!-- Your existing code... -->
                                </div>
                            @endforeach
                            <a href="test" class="btn btn-primary" id="tambahkan-btn">Tambahkan</a>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
