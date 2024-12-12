@extends('layouts.app')

@section('content')
<div class="form-container">
    <h2>Isi Data User</h2>
    <form action="{{ route('user.store') }}" method="POST">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama" required>
        </div>

        <div class="form-group">
            <label for="npm">NPM:</label>
            <input type="text" id="npm" name="npm" class="form-control" placeholder="Masukkan NPM" required>
        </div>

        <div class="form-group">
            <label for="kelas">Kelas:</label>
            <select name="kelas_id" id="kelas_id" class="form-control" required>
                <option value="" disabled selected>Pilih Kelas</option>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection