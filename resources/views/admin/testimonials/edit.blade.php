@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="mb-4">Edit Testimoni</h3>

        <form action="{{ route('testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" value="{{ $testimonial->nama }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Rating</label>
                <select name="rating" class="form-control" required>
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}" {{ $testimonial->rating == $i ? 'selected' : '' }}>
                            {{ $i }} ⭐
                        </option>
                    @endfor
                </select>
            </div>

            <div class="mb-3">
                <label>Pesan</label>
                <textarea name="pesan" class="form-control" rows="4" required>
{{ $testimonial->pesan }}
            </textarea>
            </div>

            <div class="mb-3">
                <label>Foto</label><br>
                @if ($testimonial->foto)
                    <img src="{{ asset('storage/' . $testimonial->foto) }}" width="80" class="mb-2">
                @endif
                <input type="file" name="foto" class="form-control">
            </div>

            <button class="btn btn-primary">Update</button>
            <a href="{{ route('testimonials.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
