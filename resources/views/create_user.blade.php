<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
        }
        form {
            background: rgba(255, 255, 255, 0.1); /* Transparansi pada form */
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3);
            width: 350px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group input {
            width: 100%;
            padding: 15px;
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 14px;
            outline: none;
            transition: 0.3s ease;
        }
        .form-group input:focus {
            background: rgba(255, 255, 255, 0.3);
            border-color: #4caf50;
            box-shadow: 0px 4px 10px rgba(76, 175, 80, 0.3);
        }
        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(135deg, #4caf50, #2e7d32); /* Gradasi warna tombol */
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s ease;
        }
        button:hover {
            background: linear-gradient(135deg, #66bb6a, #388e3c);
            box-shadow: 0px 4px 15px rgba(76, 175, 80, 0.5);
        }
    </style>
</head>
<body>
    <form method="post" action="{{ route('user.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" name="nama" class="form-control" id="nama" aria-describedby="" placeholder="Masukkan nama Anda">
        </div>
        <div class="form-group">
            <input type="text" name="npm" class="form-control" id="npm" aria-describedby="" placeholder="Masukkan NPM Anda">
        </div>
        <div class="form-group">
            <input type="text" name="kelas" class="form-control" id="kelas" aria-describedby="" placeholder="Masukkan Kelas Anda">
        </div>
        <button type="submit" class="btn btn-primary">Tambah User</button>
    </form>
</body>
</html>