@extends('template')

@section('content')

    <h3 class="mb-4">Data Pegawai</h3>

    <!-- Tombol Tambah -->
    <div class="mb-3">
        <a href="/pegawai/tambah" class="btn btn-primary">+ Tambah Pegawai Baru</a>
    </div>

    <!-- Form Pencarian -->
    <form action="/pegawai/cari" method="GET" class="form-inline mb-3">
        <label for="cari" class="mr-2">Cari Data Pegawai:</label>
        <input type="text" name="cari" class="form-control mr-2" placeholder="Cari Pegawai .." value="{{ request('cari') }}">
        <button type="submit" class="btn btn-info">CARI</button>
    </form>

    <!-- Tabel Data -->
    <table class="table table-bordered table-striped table-hover text-center">
        <thead class="thead-light">
            <tr>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $p)
                <tr>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                    <td>
                        <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-success btn-sm">Edit</a>
                        <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger btn-sm ml-1">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $pegawai->links() }}
    </div>

@endsection
