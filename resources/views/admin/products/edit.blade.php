@extends('layouts.app')

@section('title','Edit Produk')

@section('content')

<div class="card shadow-sm border-0">
    <div class="card-header bg-white fw-bold d-flex align-items-center gap-2">
        <i class="fas fa-edit text-primary"></i> Edit Produk Emas
    </div>

    <div class="card-body">
        <form action="{{ route('products.update', $product->id) }}"
              method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @include('admin.products.form')

            <div class="d-flex justify-content-between align-items-center mt-4">
                <div>
                    @if($product->gambar)
                        <small class="text-muted">
                            <i class="fas fa-image me-1"></i>
                            Gambar saat ini:
                        </small><br>
                        <img src="{{ asset('storage/'.$product->gambar) }}"
                             class="img-thumbnail mt-2"
                             style="width:120px; border-radius:12px;">
                    @endif
                </div>

                <div class="d-flex gap-2">
                    <a href="{{ route('products.index') }}" class="btn btn-light">
                        <i class="fas fa-arrow-left me-1"></i> Batal
                    </a>
                    <button class="btn btn-primary px-4">
                        <i class="fas fa-save me-1"></i> Update
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection
