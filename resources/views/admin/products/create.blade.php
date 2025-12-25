@extends('layouts.app')

@section('title','Tambah Produk')

@section('content')
<h4><i class="fas fa-plus"></i> Tambah Produk</h4>

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
@csrf

@include('admin.products.form')

<button class="btn btn-warning mt-3">Simpan</button>
</form>
@endsection
