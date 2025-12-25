@extends('layouts.app')

@section('title', 'Pengaturan')

@section('content')

<style>
    .settings-card {
        border-radius: 18px;
        border: none;
    }

    .settings-icon {
        width: 45px;
        height: 45px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
    }

    .form-control,
    .form-select {
        border-radius: 10px;
    }
</style>

{{-- ===== PAGE HEADER ===== --}}
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0">
        <i class="fas fa-gear text-primary me-2"></i> Pengaturan Sistem
    </h4>
</div>

<div class="row g-4">

    {{-- ===== PROFIL ADMIN ===== --}}
    <div class="col-md-6">
        <div class="card settings-card shadow-sm">
            <div class="card-header bg-white fw-bold">
                <i class="fas fa-user-shield me-2"></i> Profil Admin
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nama Admin</label>
                        <input type="text" class="form-control" value="Admin Utama">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" value="admin@gmail.com">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" value="admin">
                    </div>

                    <button type="button" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i> Simpan Profil
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- ===== KEAMANAN ===== --}}
    <div class="col-md-6">
        <div class="card settings-card shadow-sm">
            <div class="card-header bg-white fw-bold">
                <i class="fas fa-lock me-2"></i> Keamanan
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Password Lama</label>
                        <input type="password" class="form-control" placeholder="••••••••">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password Baru</label>
                        <input type="password" class="form-control" placeholder="••••••••">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" placeholder="••••••••">
                    </div>

                    <button type="button" class="btn btn-warning">
                        <i class="fas fa-key me-2"></i> Ubah Password
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- ===== PENGATURAN WEBSITE ===== --}}
    <div class="col-md-8">
        <div class="card settings-card shadow-sm">
            <div class="card-header bg-white fw-bold">
                <i class="fas fa-sliders me-2"></i> Pengaturan Website
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nama Website</label>
                        <input type="text" class="form-control" value="Toko Emas Sejahtera">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nomor WhatsApp</label>
                        <input type="text" class="form-control" value="6283133977214">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat Toko</label>
                        <textarea class="form-control" rows="3">Jl. Raya Majalengka No. 10</textarea>
                    </div>

                    <button type="button" class="btn btn-success">
                        <i class="fas fa-check me-2"></i> Simpan Pengaturan
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- ===== PREFERENSI ===== --}}
    <div class="col-md-4">
        <div class="card settings-card shadow-sm">
            <div class="card-header bg-white fw-bold">
                <i class="fas fa-palette me-2"></i> Preferensi
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Tema</label>
                        <select class="form-select">
                            <option selected>Light</option>
                            <option>Dark</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Bahasa</label>
                        <select class="form-select">
                            <option selected>Indonesia</option>
                            <option>English</option>
                        </select>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" checked>
                        <label class="form-check-label">
                            Notifikasi Email
                        </label>
                    </div>

                    <button type="button" class="btn btn-outline-primary w-100">
                        <i class="fas fa-save me-2"></i> Terapkan
                    </button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
