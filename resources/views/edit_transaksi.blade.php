<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaction</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
        }

        button, .btn-kembali {
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

        .btn-secondary, .btn-kembali {
            background-color: #ccc;
            color: #333;
        }

        button:hover, .btn-kembali:hover {
            background-color: #45a049;
        }

        .btn-secondary:hover {
            background-color: #bbb;
        }
    </style>
</head>
<body>

<h2>Edit Transaction</h2>

@if ($errors->any())
    <div style="color: red;">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('transactions.update', $transaction->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <table>
        <tr>
            <td><label for="bankName">Bank Name:</label></td>
            <td><input type="text" name="bankName" value="{{ $transaction->nama_bank }}" required></td>
        </tr>
        <tr>
            <td><label for="nomor_rekening">Nomor Rekening:</label></td>
            <td><input type="text" name="nomor_rekening" value="{{ $transaction->nomor_rekening }}"></td>
        </tr>
        <tr>
            <td><label for="uploadBukti">Upload Bukti:</label></td>
            <td><input type="file" name="uploadBukti" accept="image/jpeg, image/png, application/pdf"></td>
        </tr>
        @if ($transaction->bukti_pembayaran)
            <tr>
                <td>Current Bukti Pembayaran:</td>
                <td><img src="{{ asset('storage/' . $transaction->bukti_pembayaran) }}" alt="Current Bukti Pembayaran"></td>
            </tr>
        @endif
        <tr>
            <td colspan="2">
                <button type="submit">Update</button>
                <a href="{{ route('riwayatransaksi') }}" class="btn-kembali">Kembali</a>
            </td>
        </tr>
    </table>
</form>

</body>
</html>