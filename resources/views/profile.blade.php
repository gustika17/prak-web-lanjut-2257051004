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

        .profile-picture {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="card">
        <img class="profile-picture" src="{{ asset('upload/img/' . $user->foto) }}" alt="foto-profile">
        <div class="card-body">
            <div class="card-title">
                <strong>Nama:</strong> <?= $user->nama?>
            </div>
            <div class="card-title">
                <strong>Kelas:</strong> <?= $user->nama_kelas ?? 'Kelas tidak ditemukan' ?>
            </div>
            <div class="card-title">
                <strong>NPM:</strong> <?= $user->npm ?>
            </div>
        </div>
    </div>
</body>
</html>