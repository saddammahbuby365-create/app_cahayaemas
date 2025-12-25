@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')

{{-- ================= CUSTOM STYLE ================= --}}
<style>
    .dashboard-title {
        font-weight: 700;
        letter-spacing: .5px;
    }

    .stat-card {
        border-radius: 18px;
        transition: all .35s ease;
        background: #ffffff;
    }

    .stat-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 15px 35px rgba(0,0,0,.08);
    }

    .stat-icon {
        width: 56px;
        height: 56px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
    }

    .table thead th {
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: .5px;
    }

    .quick-btn {
        border-radius: 14px;
        padding: 12px;
        font-weight: 600;
        transition: all .3s ease;
    }

    .quick-btn:hover {
        transform: translateY(-2px);
    }

    .card-modern {
        border-radius: 18px;
        border: none;
    }

    .status-badge {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
    }
</style>

{{-- ================= PAGE HEADER ================= --}}
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="dashboard-title">
        <i class="fas fa-gauge-high me-2 text-primary"></i> Dashboard Admin
    </h4>
    <span class="badge bg-success px-3 py-2">
        <i class="fas fa-circle me-1"></i> Online
    </span>
</div>

{{-- ================= STATISTIC CARDS ================= --}}
<div class="row g-4 mb-4">

    <div class="col-md-3">
        <div class="card stat-card shadow-sm">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="stat-icon bg-warning bg-opacity-25 text-warning">
                    <i class="fas fa-gem"></i>
                </div>
                <div>
                    <small class="text-muted">Total Produk</small>
                    <h4 class="fw-bold mb-0">24</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card stat-card shadow-sm">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="stat-icon bg-success bg-opacity-25 text-success">
                    <i class="fas fa-receipt"></i>
                </div>
                <div>
                    <small class="text-muted">Transaksi</small>
                    <h4 class="fw-bold mb-0">12</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card stat-card shadow-sm">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="stat-icon bg-info bg-opacity-25 text-info">
                    <i class="fas fa-comments"></i>
                </div>
                <div>
                    <small class="text-muted">Testimoni</small>
                    <h4 class="fw-bold mb-0">8</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card stat-card shadow-sm">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="stat-icon bg-primary bg-opacity-25 text-primary">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div>
                    <small class="text-muted">Admin Aktif</small>
                    <h4 class="fw-bold mb-0">1</h4>
                </div>
            </div>
        </div>
    </div>

</div>

{{-- ================= MAIN CONTENT ================= --}}
<div class="row g-4">

    {{-- TRANSAKSI TERBARU --}}
    <div class="col-lg-8">
        <div class="card card-modern shadow-sm">
            <div class="card-header bg-white fw-bold">
                <i class="fas fa-clock me-2"></i> Transaksi Terbaru
            </div>
            <div class="card-body">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Cincin Emas 24K</td>
                            <td>IDR 2.500.000</td>
                            <td>
                                <span class="status-badge bg-success text-white">
                                    Selesai
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Gelang Emas</td>
                            <td>IDR 3.200.000</td>
                            <td>
                                <span class="status-badge bg-warning text-dark">
                                    Pending
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Kalung Emas</td>
                            <td>IDR 4.100.000</td>
                            <td>
                                <span class="status-badge bg-success text-white">
                                    Selesai
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- QUICK ACTION --}}
    <div class="col-lg-4">
        <div class="card card-modern shadow-sm">
            <div class="card-header bg-white fw-bold">
                <i class="fas fa-bolt me-2"></i> Quick Action
            </div>
            <div class="card-body d-grid gap-3">
                <a href="{{ route('products.index') }}"
                   class="btn btn-outline-primary quick-btn">
                    <i class="fas fa-plus me-2"></i> Kelola Produk
                </a>

                <a href="{{ route('testimonials.index') }}"
                   class="btn btn-outline-success quick-btn">
                    <i class="fas fa-comments me-2"></i> Kelola Testimoni
                </a>

                <a href="{{ route('admin.pengaturan') }}"
                   class="btn btn-outline-dark quick-btn">
                    <i class="fas fa-gear me-2"></i> Pengaturan
                </a>
            </div>
        </div>
    </div>

</div>

@endsection
