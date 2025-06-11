@extends('template')
@section('content')

<h3>Data Karyawan</h3>

<p>Cari Data Karyawan :</p>
<form action="/karyawan/cari" method="GET" class="form-inline mb-3">
    <input type="text" class="form-control mr-2" name="cari" placeholder="Cari Nama ..">
    <input type="submit" value="CARI" class="btn btn-info">
</form>
<br/>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($karyawan as $k)
        <tr>
            <td>{{ $k->kodepegawai }}</td>
            <td>{{ strtoupper($k->namalengkap) }}</td> {{-- Huruf kapital --}}
            <td>{{ $k->divisi }}</td>
            <td>{{ strtolower($k->departemen) }}</td> {{-- Huruf kecil --}}
            <td>
                <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{-- Tombol Tambah di bawah tabel --}}
<a href="/karyawan/tambah" class="btn btn-primary mt-3"> + Tambah Karyawan Baru</a>

{{-- Pagination --}}
<div class="mt-3">
    {{ $karyawan->links() }}
</div>

@endsection
