@extends('template')

@section('content')
<div class="container mt-4">
    <h3 class="mb-3">Daftar Penghapus</h3>

    <a href="/penghapus/tambah" class="btn btn-primary mb-3">+ Tambah Penghapus Baru</a>

    <div class="card mb-4">
        <div class="card-body">
            <form action="/penghapus/cari" method="GET" class="form-inline">
                <div class="row">
                    <div class="col-md-8 mb-2">
                        <input type="text" class="form-control w-100" name="cari" placeholder="Cari merk penghapus...">
                    </div>
                    <div class="col-md-4 mb-2">
                        <button type="submit" class="btn btn-info w-100">CARI</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Merk</th>
                <th>Harga</th>
                <th>Ketersediaan</th>
                <th>Berat</th>
                <th class="text-center">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penghapus as $pe)
            <tr>
                <td>{{ $pe->ID }}</td>
                <td>{{ $pe->merkpenghapus }}</td>
                <td>Rp{{ number_format($pe->hargapenghapus, 0, ',', '.') }}</td>
                <td>
                    <span class="badge {{ $pe->tersedia == 1 ? 'bg-success' : 'bg-secondary' }}">
                        {{ $pe->tersedia == 1 ? 'Tersedia' : 'Tidak Tersedia' }}
                    </span>
                </td>
                <td>{{ $pe->berat }} gram</td>
                <td class="text-center">
                    <a href="/penghapus/edit/{{ $pe->ID }}" class="btn btn-sm btn-success">Edit</a>
                    <a href="/penghapus/hapus/{{ $pe->ID }}" class="btn btn-sm btn-danger"
                        onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $penghapus->links() }}
    </div>
</div>
@endsection
