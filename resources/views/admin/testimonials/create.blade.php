@extends('layouts.app')

@section('title','Tambah Testimoni')

@section('content')

<div class="card shadow-sm border-0">
    <div class="card-header bg-white fw-bold d-flex align-items-center gap-2">
        <i class="fas fa-comments text-success"></i> Tambah Testimoni
    </div>

    <div class="card-body">
        <form action="{{ route('testimonials.store') }}"
              method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row g-3">

                <!-- NAMA -->
                <div class="col-md-6">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control"
                        placeholder="Nama pelanggan" required>
                </div>

                <!-- RATING -->
                <div class="col-md-6">
                    <label class="form-label">Rating</label>
                    <select name="rating" class="form-select" required>
                        @for ($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}">{{ $i }} ⭐</option>
                        @endfor
                    </select>
                </div>

                <!-- PESAN -->
                <div class="col-12">
                    <label class="form-label">Pesan</label>
                    <textarea name="pesan" class="form-control" rows="4"
                        placeholder="Tulis pesan testimoni..." required></textarea>
                </div>

                <!-- FOTO -->
                <div class="col-md-6">
                    <label class="form-label">Foto (Opsional)</label>
                    <input type="file" name="foto" class="form-control">
                </div>

            </div>

            <!-- ACTION BUTTON -->
            <div class="d-flex justify-content-end gap-2 mt-4">
                <a href="{{ route('testimonials.index') }}" class="btn btn-light">
                    <i class="fas fa-arrow-left me-1"></i> Kembali
                </a>
                <button class="btn btn-success px-4">
                    <i class="fas fa-save me-1"></i> Simpan
                </button>
            </div>

        </form>
    </div>
</div>

@endsection
