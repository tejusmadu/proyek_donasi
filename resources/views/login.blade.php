<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
         body {
            background-image: url('{{ asset("image/forasmile_content1.png") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        .centered-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .btn-center {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#" style="position: absolute; left: 50%; transform: translateX(-50%);"></a>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 centered-form">
                <div class="text-center">
                </div>
                <div class="form-container">
                    <form method="POST" action="{{ route('login.submit') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Username:</label>
                            <input type="name" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="form-group">
                            <label for="role">Login As:</label>
                            <select class="form-control" name="role" id="role" required>
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="btn-center">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                    <p style="text-align: center; margin-top: 20px;">Belum punya akun sebagai user? Silakan <a href="{{ route('register') }}">registrasi</a> terlebih dahulu.</p>
                    <!-- Tambahkan di dalam form atau di tempat yang sesuai -->
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>
