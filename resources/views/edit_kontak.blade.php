<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
        }

        .table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }

        .table td,
        .table th {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        button,
        .btn-kembali {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-right: 10px;
        }

        .btn-kembali {
            background-color: #6c757d;
        }

        button:hover,
        .btn-kembali:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Kontak</h2>
        <form method="POST" action="{{ route('update', $contact) }}">
            @csrf
            @method('PUT')

            <table class="table">
                <tr>
                    <td><label for="name">Nama:</label></td>
                    <td><input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}" required></td>
                </tr>
                <tr>
                    <td><label for="phone">Nomor Telepon:</label></td>
                    <td><input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}" required></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}" required></td>
                </tr>
                <tr>
                    <td><label for="address">Alamat:</label></td>
                    <td><textarea class="form-control" id="address" name="address" rows="4" required>{{ $contact->address }}</textarea></td>
                </tr>
                <tr>
                    <td><label for="message">Pesan:</label></td>
                    <td><textarea class="form-control" id="message" name="message" rows="4" required>{{ $contact->message }}</textarea></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-primary">Perbarui Kontak</button>
                        <a href="{{ route('index') }}" class="btn-kembali">Kembali</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
