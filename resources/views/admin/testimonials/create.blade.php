@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Tambah Testimoni</h3>

    <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Rating (1–5)</label>
            <select name="rating" class="form-control" required>
                @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }} ⭐</option>
                @endfor
            </select>
        </div>

        <div class="mb-3">
            <label>Pesan</label>
            <textarea name="pesan" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label>Foto (Opsional)</label>
            <input type="file" name="foto" class="form-control">
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('testimonials.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
