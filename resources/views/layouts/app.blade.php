<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            min-height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
        }

        .content {
            margin-left: 250px;
        }

        .sidebar a {
            color: #333;
            text-decoration: none;
        }

        .sidebar a.active,
        .sidebar a:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar bg-light shadow-sm p-3">
        <!-- LOGO -->
        <div class="text-center mb-4">
            <img src="{{ asset('assets/images/mekarlogo.png') }}" alt="Logo" width="140" class="mb-2">
            <h6 class="fw-bold text-warning">Toko Emas</h6>
        </div>

        <!-- MENU -->
        <ul class="nav nav-pills flex-column gap-1">
            <li class="nav-item">
                <a href="/admin/dashboard" class="nav-link">
                    <i class="fas fa-gauge me-2"></i> Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('products.index') }}" class="nav-link">
                    <i class="fas fa-gem me-2"></i> Produk Emas
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('testimonials.index') }}" class="nav-link">
                    <i class="fas fa-money-bill-wave me-2"></i> Testimonials
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-chart-line me-2"></i> Laporan
                </a>
            </li>

            <li class="nav-item mt-3">
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
    <div class="content p-4">
        @yield('content')
    </div>

</body>

</html>
