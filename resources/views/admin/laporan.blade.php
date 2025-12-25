@extends('layouts.app')

@section('title', 'Laporan')

@section('content')

    <style>
        .card-modern {
            border-radius: 18px;
            border: none;
        }

        .stat-box {
            border-radius: 16px;
            padding: 20px;
            color: #fff;
        }

        .stat-box i {
            font-size: 32px;
            opacity: .85;
        }

        .table thead th {
            background: #f8f9fa;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: .6px;
        }
    </style>

    {{-- ===== HEADER ===== --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold mb-0">
            <i class="fas fa-chart-line text-primary me-2"></i> Laporan Penjualan
        </h4>

        <button class="btn btn-outline-secondary">
            <i class="fas fa-print me-2"></i> Cetak Laporan
        </button>
    </div>

    {{-- ===== SUMMARY ===== --}}
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="stat-box bg-primary shadow-sm">
                <i class="fas fa-box"></i>
                <h6 class="mt-3 mb-1">Total Produk</h6>
                <h3 class="fw-bold">24</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stat-box bg-success shadow-sm">
                <i class="fas fa-receipt"></i>
                <h6 class="mt-3 mb-1">Total Transaksi</h6>
                <h3 class="fw-bold">56</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stat-box bg-warning shadow-sm text-dark">
                <i class="fas fa-wallet"></i>
                <h6 class="mt-3 mb-1">Pendapatan</h6>
                <h3 class="fw-bold">Rp 125.000.000</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="stat-box bg-info shadow-sm">
                <i class="fas fa-star"></i>
                <h6 class="mt-3 mb-1">Testimoni</h6>
                <h3 class="fw-bold">18</h3>
            </div>
        </div>
    </div>

    {{-- ===== LAPORAN TRANSAKSI ===== --}}
    <div class="card card-modern shadow-sm mb-4">
        <div class="card-header bg-white fw-bold">
            <i class="fas fa-table me-2"></i> Data Transaksi
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tanggal</th>
                            <th>Produk</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>10 Sep 2025</td>
                            <td>Cincin Emas 24K</td>
                            <td>1</td>
                            <td>Rp 2.500.000</td>
                            <td><span class="badge bg-success">Selesai</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>11 Sep 2025</td>
                            <td>Gelang Emas</td>
                            <td>2</td>
                            <td>Rp 6.400.000</td>
                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>12 Sep 2025</td>
                            <td>Kalung Emas</td>
                            <td>1</td>
                            <td>Rp 4.100.000</td>
                            <td><span class="badge bg-success">Selesai</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>13 Sep 2025</td>
                            <td>Anting Emas</td>
                            <td>3</td>
                            <td>Rp 7.800.000</td>
                            <td><span class="badge bg-success">Selesai</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- ===== CATATAN ===== --}}
    <div class="card card-modern shadow-sm">
        <div class="card-header bg-white fw-bold">
            <i class="fas fa-note-sticky me-2"></i> Catatan Laporan
        </div>
        <div class="card-body">
            <ul class="mb-0">
                <li>Penjualan tertinggi terjadi pada produk <strong>Gelang Emas</strong></li>
                <li>Mayoritas transaksi berstatus <strong>Selesai</strong></li>
                <li>Testimoni pelanggan cenderung positif</li>
            </ul>
        </div>
    </div>

@endsection
