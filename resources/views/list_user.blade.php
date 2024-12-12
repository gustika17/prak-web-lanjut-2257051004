@extends('layouts.app')

@section('content')
<div class="container mt-5 p-4 rounded shadow" style="background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); color: #ffffff;">
    <h2 class="mb-4 text-white">Daftar User</h2>
    <div class="table-responsive">
        <table class="table table-hover table-bordered" style="background: #ffffff;">
            <thead class="bg-primary text-white">
            <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user) 
            <tr>
                <td>{{ $user->id }}</td> 
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td>{{ $user->nama_kelas }}</td>
                <td><a href="{{ route('users.show', $user->id) }}" class = "btn btn-warning mb-3">Detail</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection