@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
    <h4 class="mb-4">
        <i class="fas fa-gauge"></i> Dashboard Admin
    </h4>

    <div class="row g-4">
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fas fa-gem text-warning fs-3"></i>
                    <h6 class="mt-2">Produk</h6>
                    <h4>24</h4>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <i class="fas fa-receipt text-success fs-3"></i>
                    <h6 class="mt-2">Transaksi</h6>
                    <h4>12</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
