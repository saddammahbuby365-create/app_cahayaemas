<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
            background-color: #f4f6f9;
        }

        /* ===== SIDEBAR ===== */
        .sidebar {
            width: 260px;
            min-height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #ffffff;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
            padding: 20px 15px;
        }

        /* LOGO */
        .sidebar .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar .logo img {
            max-width: 140px;
        }

        .sidebar .logo h6 {
            margin-top: 10px;
            font-weight: 700;
            color: #ffb703;
            letter-spacing: 1px;
        }

        /* MENU */
        .sidebar .nav-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 15px;
            border-radius: 12px;
            font-weight: 500;
            color: #555;
            transition: all 0.3s ease;
        }

        .sidebar .nav-link i {
            font-size: 16px;
            width: 20px;
            text-align: center;
        }

        .sidebar .nav-link:hover {
            background: #f1f5ff;
            color: #0d6efd;
        }

        .sidebar .nav-link.active {
            background: linear-gradient(135deg, #ffb703, #ff8800);
            color: #fff;
            box-shadow: 0 8px 20px rgba(255, 183, 3, 0.4);
        }

        /* LOGOUT */
        .sidebar .btn-outline-danger {
            border-radius: 12px;
            padding: 10px;
            font-weight: 600;
        }

        /* ===== CONTENT ===== */
        .content {
            margin-left: 260px;
            padding: 30px;
        }

        /* PAGE TITLE */
        h4 {
            font-weight: 700;
        }

        /* CARD GLOBAL */
        .card {
            border-radius: 18px;
            border: none;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
        }

        /* TABLE */
        .table {
            border-radius: 12px;
            overflow: hidden;
        }

        .table thead {
            background-color: #f8f9fa;
        }

        /* BUTTON */
        .btn {
            border-radius: 10px;
            font-weight: 500;
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <!-- LOGO -->
        <div class="logo">
            <img src="{{ asset('assets/images/mekarlogo.png') }}" alt="Logo">
            <h6>TOKO EMAS CAHAYA</h6>
        </div>

        <!-- MENU -->
        <ul class="nav nav-pills flex-column gap-2">
            <li class="nav-item">
                <a href="/admin/dashboard" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <i class="fas fa-gauge"></i> Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('products.index') }}"
                    class="nav-link {{ request()->is('products*') ? 'active' : '' }}">
                    <i class="fas fa-gem"></i> Produk Emas
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('testimonials.index') }}"
                    class="nav-link {{ request()->is('testimonials*') ? 'active' : '' }}">
                    <i class="fas fa-comments"></i> Testimonials
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.laporan') }}"
                    class="nav-link {{ request()->is('admin/laporan') ? 'active' : '' }}">
                    <i class="fas fa-chart-line"></i> Laporan
                </a>
            </li>

            <li class="nav-item mt-4">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-outline-danger w-100">
                        <i class="fas fa-sign-out-alt me-1"></i> Logout
                    </button>
                </form>
            </li>
        </ul>
    </div>

    <!-- CONTENT -->
    <div class="content">
        @yield('content')
    </div>

</body>

</html>
