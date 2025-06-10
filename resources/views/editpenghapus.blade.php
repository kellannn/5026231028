@extends('template')
@section('content')
<h3>Edit Data Penghapus</h3>

<a href="/penghapus" class="btn btn-info">Kembali</a>
<br /><br />

@foreach ($penghapus as $p)
<form action="/penghapus/update" method="post" class="form-horizontal">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $p->ID }}">

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="merkpenghapus">Merk Penghapus</label>
        <div class="col-sm-6">
            <input class="form-control" type="text" id="merkpenghapus" name="merkpenghapus"
                value="{{ $p->merkpenghapus }}" placeholder="Masukkan Merk Penghapus" required>
        </div>
    </div>

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="hargapenghapus">Harga</label>
        <div class="col-sm-6">
            <input class="form-control" type="number" id="hargapenghapus" name="hargapenghapus"
                value="{{ $p->hargapenghapus }}" placeholder="Masukkan Harga" required>
        </div>
    </div>

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="tersedia">Ketersediaan</label>
        <div class="col-sm-6">
            <select class="form-control" id="tersedia" name="tersedia" required>
                <option value="1" {{ $p->tersedia == 1 ? 'selected' : '' }}>Tersedia</option>
                <option value="0" {{ $p->tersedia == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
            </select>
        </div>
    </div>

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="berat">Berat (gram)</label>
        <div class="col-sm-6">
            <input class="form-control" type="number" id="berat" name="berat"
                value="{{ $p->berat }}" placeholder="Masukkan Berat (gram)" required>
        </div>
    </div>

    <input type="submit" value="Simpan Data" class="btn btn-success">
</form>
@endforeach

@endsection
