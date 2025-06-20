@extends('template')

@section('content')

<div class="d-flex justify-content-center mt-5">
    <div class="card shadow-sm" style="width: 25rem;">
        <div class="card-body text-center">
            <h1 class="display-4 text-primary mb-3">
                <i class="fas fa-eye"></i>
            </h1>
            <h5 class="card-title">Jumlah Pengunjung</h5>
            <p class="card-text display-4 font-weight-bold">{{ $jumlah }}</p>
        </div>
    </div>
</div>

@endsection
