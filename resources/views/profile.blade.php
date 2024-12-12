<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

        .card {
            width: 20rem;
            border: none;
            border-radius: 15px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .pp {
            width: 100%;
            height: 15rem;
            object-fit: cover;
        }

        .card-body {
            background-color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .card-title {
            color: #4A4A4A;
            font-size: 1.25rem;
            margin: 10px 0;
        }

        .card-title:first-child {
            font-weight: bold;
            color: #2C3E50;
        }

        .card-title:last-child {
            font-size: 1rem;
            color: #7F8C8D;
        }
    </style>
</head>
<body>
    <div class="card">
        <img src="{{ asset('asset/images.jpeg') }}" class="pp" alt="Profile Photo">

        <div class="card-body">
            <h5 class="card-title">{{ $nama ?? 'Gustika Dwi Mardini' }}</h5>
            <h5 class="card-title">{{ $kelas ?? '2257051004' }}</h5>
            <h5 class="card-title">{{ $npm ?? 'Kelas tidak ditemukan' }}</h5>
        </div>
    </div>
</body>
</html>