@extends('layouts.app')

@section('title', 'Produk')

@section('content')

    {{-- ===== CUSTOM STYLE ===== --}}
    <style>
        .card-modern {
            border-radius: 18px;
            border: none;
        }

        .table thead th {
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: .6px;
            background: #f8f9fa;
        }

        .product-img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, .1);
        }

        .btn-icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .badge-category {
            font-size: 12px;
            padding: 6px 10px;
            border-radius: 20px;
        }
    </style>

    {{-- ===== PAGE HEADER ===== --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold mb-0">
            <i class="fas fa-gem text-warning me-2"></i> Produk Emas
        </h4>

        <a href="{{ route('products.create') }}" class="btn btn-warning shadow-sm">
            <i class="fas fa-plus me-2"></i> Tambah Produk
        </a>
    </div>

    {{-- ===== ALERT ===== --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="fas fa-check-circle me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- ===== TABLE ===== --}}
    <div class="card card-modern shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th class="text-center" width="140">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $p)
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/' . $p->gambar) }}" class="product-img"
                                        alt="{{ $p->nama }}">
                                </td>
                                <td class="fw-semibold">
                                    {{ $p->nama }}
                                </td>
                                <td>
                                    <span class="badge bg-primary badge-category">
                                        {{ ucfirst($p->kategori) }}
                                    </span>
                                </td>
                                <td class="fw-semibold">
                                    Rp {{ number_format($p->harga, 0, ',', '.') }}
                                </td>
                                <td>
                                    @if ($p->stok > 0)
                                        <span class="badge bg-success">
                                            {{ $p->stok }}
                                        </span>
                                    @else
                                        <span class="badge bg-danger">
                                            Habis
                                        </span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('products.edit', $p->id) }}" class="btn btn-sm btn-primary btn-icon"
                                        title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form action="{{ route('products.destroy', $p->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger btn-icon" title="Hapus"
                                            onclick="return confirm('Yakin hapus produk ini?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">
                                    <i class="fas fa-box-open mb-2 fs-4"></i><br>
                                    Data produk belum tersedia
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
