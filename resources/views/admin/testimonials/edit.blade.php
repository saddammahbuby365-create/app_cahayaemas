@extends('layouts.app')

@section('title', 'Edit Testimoni')

@section('content')

    <div class="card shadow-sm border-0">
        <div class="card-header bg-white fw-bold d-flex align-items-center gap-2">
            <i class="fas fa-comments text-primary"></i> Edit Testimoni
        </div>

        <div class="card-body">
            <form action="{{ route('testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">

                    <!-- NAMA -->
                    <div class="col-md-6">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control"
                            value="{{ old('nama', $testimonial->nama) }}" required>
                    </div>

                    <!-- RATING -->
                    <div class="col-md-6">
                        <label class="form-label">Rating</label>
                        <select name="rating" class="form-select" required>
                            @for ($i = 1; $i <= 5; $i++)
                                <option value="{{ $i }}"
                                    {{ old('rating', $testimonial->rating) == $i ? 'selected' : '' }}>
                                    {{ $i }} ⭐
                                </option>
                            @endfor
                        </select>
                    </div>

                    <!-- PESAN -->
                    <div class="col-12">
                        <label class="form-label">Pesan</label>
                        <textarea name="pesan" class="form-control" rows="4" required>{{ old('pesan', $testimonial->pesan) }}</textarea>
                    </div>

                    <!-- FOTO -->
                    <div class="col-md-6">
                        <label class="form-label">Foto</label>
                        <input type="file" name="foto" class="form-control">
                        <small class="text-muted">Kosongkan jika tidak ingin mengganti foto</small>
                    </div>

                    <!-- PREVIEW FOTO -->
                    @if ($testimonial->foto)
                        <div class="col-md-6">
                            <label class="form-label">Foto Saat Ini</label><br>
                            <img src="{{ asset('storage/' . $testimonial->foto) }}" class="img-thumbnail"
                                style="width:100px; border-radius:12px;">
                        </div>
                    @endif

                </div>

                <!-- ACTION BUTTON -->
                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('testimonials.index') }}" class="btn btn-light">
                        <i class="fas fa-arrow-left me-1"></i> Kembali
                    </a>
                    <button class="btn btn-primary px-4">
                        <i class="fas fa-save me-1"></i> Update
                    </button>
                </div>

            </form>
        </div>
    </div>

@endsection
