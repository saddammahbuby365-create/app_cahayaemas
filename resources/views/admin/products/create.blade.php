@extends('layouts.app')

@section('title','Tambah Produk')

@section('content')

<div class="card shadow-sm border-0">
    <div class="card-header bg-white fw-bold d-flex align-items-center gap-2">
        <i class="fas fa-plus text-warning"></i> Tambah Produk Emas
    </div>

    <div class="card-body">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @include('admin.products.form')

            <div class="d-flex justify-content-end mt-4 gap-2">
                <a href="{{ route('products.index') }}" class="btn btn-light">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
                <button class="btn btn-warning text-white px-4">
                    <i class="fas fa-save me-1"></i> Simpan
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
