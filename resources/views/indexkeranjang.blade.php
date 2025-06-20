@extends('template')

@section('content')
    <h3 class="mb-4">Keranjang Belanja</h3>

    <table class="table table-bordered table-hover text-center">
        <thead class="thead-light">
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($keranjangs as $item)
                <tr>
                    <td>{{ $item->ID }}</td>
                    <td>{{ $item->KodeBarang }}</td>
                    <td>{{ $item->Jumlah }}</td>
                    <td>{{ number_format($item->Harga, 0, ',', '.') }}</td>
                    <td>{{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="#" class="btn btn-success btn-sm mr-1">Beli</a>
                        <a href="/keranjang/hapus/{{ $item->ID }}" class="btn btn-danger btn-sm">Batal</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
