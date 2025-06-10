@extends('template')
@section('content')

<h3>Data Penghapus</h3>

<a href="/penghapus/tambah" class="btn btn-primary"> + Tambah Penghapus Baru</a>

<p>Cari Data Penghapus :</p>
<form action="/penghapus/cari" method="GET">
    <input type="text" class="form-control" name="cari" placeholder="Cari Penghapus ..">
    <input type="submit" value="CARI" class="btn btn-info">
</form>
<br/>

<table class="table table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>Merk</th>
        <th>Harga</th>
        <th>Ketersediaan</th>
        <th>Berat</th>
        <th>Opsi</th>
    </tr>
    @foreach($penghapus as $pe)
    <tr>
        <td>{{ $pe->ID }}</td>
        <td>{{ $pe->merkpenghapus }}</td>
        <td>Rp{{ number_format($pe->hargapenghapus, 0, ',', '.') }}</td>
        <td>{{ $pe->tersedia == 1 ? 'Tersedia' : 'Tidak Tersedia' }}</td>
        <td>{{ $pe->berat }} gram</td>
        <td>
            <a href="/penghapus/edit/{{ $pe->ID }}" class="btn btn-success">Edit</a>
            |
            <a href="/penghapus/hapus/{{ $pe->ID }}" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

{{ $penghapus->links() }}

@endsection
