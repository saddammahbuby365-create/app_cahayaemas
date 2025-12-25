@extends('layouts.app')

@section('title','Produk')

@section('content')
<h4 class="mb-3">
    <i class="fas fa-gem"></i> Produk Emas
</h4>

<a href="{{ route('products.create') }}" class="btn btn-warning mb-3">
    <i class="fas fa-plus"></i> Tambah Produk
</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th width="160">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $p)
        <tr>
            <td>
                <img src="{{ asset('storage/'.$p->gambar) }}" width="70">
            </td>
            <td>{{ $p->nama }}</td>
            <td>{{ ucfirst($p->kategori) }}</td>
            <td>Rp {{ number_format($p->harga,0,',','.') }}</td>
            <td>{{ $p->stok }}</td>
            <td>
                <a href="{{ route('products.edit',$p->id) }}" class="btn btn-sm btn-primary">
                    <i class="fas fa-edit"></i>
                </a>

                <form action="{{ route('products.destroy',$p->id) }}"
                      method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger"
                        onclick="return confirm('Hapus produk?')">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
