@extends('template')

@section('content')
<div class="container mt-4">
    <h3 class="mb-3">Data Karyawan</h3>

    {{-- Form Pencarian --}}
    <div class="card mb-4">
        <div class="card-body">
            <form action="/karyawan/cari" method="GET" class="row g-2">
                <div class="col-md-9">
                    <input type="text" name="cari" class="form-control" placeholder="Cari nama karyawan...">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-info w-100">CARI</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Tabel Data --}}
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th class="text-center">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($karyawan as $k)
            <tr>
                <td>{{ $k->kodepegawai }}</td>
                <td>{{ strtoupper($k->namalengkap) }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ ucfirst(strtolower($k->departemen)) }}</td>
                <td class="text-center">
                    <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus karyawan ini?')">
                        Hapus
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center text-muted">Tidak ada data karyawan ditemukan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Tombol Tambah --}}
    <div class="text-end mt-3">
        <a href="/karyawan/tambah" class="btn btn-primary">+ Tambah Karyawan Baru</a>
    </div>
</div>
@endsection
