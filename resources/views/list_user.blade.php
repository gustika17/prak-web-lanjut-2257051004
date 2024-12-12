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
                <th>Foto</th>
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
                <td><img src="{{ asset('upload/img/' . $user->foto) }}" class="user-photo" alt="User  Photo"></td>
                <td>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary mb-3">Detail</a>
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-400 p-1 text-md-center font-semibold mx-1 rounded-lg" 
                        onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

<style>
    .user-photo {
        width: 50px; /* Atur lebar gambar */
        height: 50px; /* Atur tinggi gambar */
        object-fit: cover; /* Memastikan gambar tidak terdistorsi */
        border-radius: 50%; /* Jika ingin gambar berbentuk bulat */
    }
</style>
@endsection