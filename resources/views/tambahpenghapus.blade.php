@extends('template')
@section('content')

<h3>Tambah Data Penghapus</h3>

<a href="/penghapus" class="btn btn-info">Kembali</a>

<br/>
<br/>

<form action="/penghapus/store" method="post" class="form-horizontal">
    {{ csrf_field() }}

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="merkpenghapus">
            Merk Penghapus
        </label>
        <div class="col-sm-6">
            <input class="form-control"
                   type="text"
                   id="merkpenghapus"
                   placeholder="Masukkan Merk Penghapus"
                   name="merkpenghapus" required>
        </div>
    </div>

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="hargapenghapus">
            Harga Penghapus
        </label>
        <div class="col-sm-6">
            <input class="form-control"
                   type="number"
                   id="hargapenghapus"
                   placeholder="Masukkan Harga"
                   name="hargapenghapus" required>
        </div>
    </div>

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="tersedia">
            Ketersediaan
        </label>
        <div class="col-sm-6">
            <select class="form-control" name="tersedia" id="tersedia" required>
                <option value="1">Tersedia</option>
                <option value="0">Tidak Tersedia</option>
            </select>
        </div>
    </div>

    <div class="form-group has-success">
        <label class="control-label col-sm-2" for="berat">
            Berat (gram)
        </label>
        <div class="col-sm-6">
            <input class="form-control"
                   type="number"
                   id="berat"
                   placeholder="Masukkan Berat (dalam gram)"
                   name="berat"
                   step="0.01"
                   required>
        </div>
    </div>

    <input type="submit" value="Simpan Data" class="btn btn-success">
</form>

@endsection
