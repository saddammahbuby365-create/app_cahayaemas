@extends('layouts.app')

@section('title','Edit Produk')

@section('content')
<h4><i class="fas fa-edit"></i> Edit Produk</h4>

<form action="{{ route('products.update',$product->id) }}"
      method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')

@include('admin.products.form')

<button class="btn btn-primary mt-3">Update</button>
</form>
@endsection
