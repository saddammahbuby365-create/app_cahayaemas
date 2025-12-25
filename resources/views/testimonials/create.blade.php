<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kirim Testimoni | Toko Emas Cahaya</title>
    <link rel="icon" href="{{ asset('assets/images/MEKAR JEWRLY 2-01.png') }}" type="image/png">

    <!-- ICONS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/mekarlogo.png') }}" width="130">
            </a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/#home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/#menu') }}">Perhiasan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/#contact') }}">Kontak</a></li>
                </ul>

                <div class="d-flex gap-3">
                    @guest
                        <a href="{{ route('login') }}" class="text-dark">
                            <i class="fas fa-user-circle fs-5"></i>
                        </a>
                    @endguest

                    @auth
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn p-0 bg-transparent border-0 text-dark">
                                <i class="fas fa-sign-out-alt fs-5"></i>
                            </button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- CONTENT -->
    <div class="container" style="padding-top:120px; padding-bottom:60px;">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">

                        <h3 class="text-center mb-4 fw-bold">
                            Kirim Testimoni Anda
                        </h3>

                        @if (session('success'))
                            <div class="alert alert-success text-center">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('testimoni.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- NAMA -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}"
                                    required>
                            </div>

                            <!-- RATING -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Rating</label>
                                <select name="rating" class="form-select" required>
                                    <option value="">-- Pilih Rating --</option>
                                    @for ($i = 5; $i >= 1; $i--)
                                        <option value="{{ $i }}">{{ $i }} ⭐</option>
                                    @endfor
                                </select>
                            </div>

                            <!-- PESAN -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Testimoni</label>
                                <textarea name="pesan" rows="4" class="form-control" required>{{ old('pesan') }}</textarea>
                            </div>

                            <!-- FOTO -->
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Foto (Opsional)</label>
                                <input type="file" name="foto" class="form-control">
                            </div>

                            <button class="btn btn-warning w-100 py-2 fw-semibold rounded-pill">
                                Kirim Testimoni
                            </button>
                        </form>

                        <p class="text-muted text-center mt-3 small">
                            * Testimoni akan ditampilkan setelah disetujui admin
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}">
        < /cript>

        <
        /body>

        <
        /html>
