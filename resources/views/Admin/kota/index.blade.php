@extends('layouts.dashboard')

@section('title', 'Manajemen Kota')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Manajemen Kota</h1>

    <!-- Notifikasi -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tambah Kota -->
    <div class="card mb-4">
        <div class="card-header">Tambah Kota</div>
        <div class="card-body">
            <form action="{{ route('kota.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_kota">Nama Kota</label>
                    <input type="text" name="nama_kota" id="nama_kota" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Tambah</button>
            </form>
        </div>
    </div>

    <!-- Daftar Kota -->
    <div class="card">
        <div class="card-header">Daftar Kota</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Kota</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kota as $item)
                        <tr>
                            <td>{{ $item->id_kota }}</td>
                            <td>{{ $item->nama_kota }}</td>
                            <td>
                                <!-- Edit -->
                                <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id_kota }}">Edit</button>

                                <!-- Delete -->
                                <form action="{{ route('kota.destroy', $item->id_kota) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="editModal{{ $item->id_kota }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Kota</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('kota.update', $item->id_kota) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="nama_kota_{{ $item->id_kota }}">Nama Kota</label>
                                                <input type="text" name="nama_kota" id="nama_kota_{{ $item->id_kota }}" class="form-control" value="{{ $item->nama_kota }}" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
