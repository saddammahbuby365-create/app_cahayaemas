<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login | Mekar Jewelry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #fff, #f8f9fa);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            max-width: 420px;
            width: 100%;
            border-radius: 16px;
        }

        .login-card h3 {
            font-weight: 600;
        }

        .form-control {
            height: 45px;
        }

        .input-group-text {
            background: #fff;
        }

        .btn-login {
            background-color: #d4af37;
            color: #fff;
            font-weight: 500;
        }

        .btn-login:hover {
            background-color: #b8962e;
            color: #fff;
        }
    </style>
</head>

<body>

    <div class="card shadow login-card p-4">
        <div class="text-center mb-4">
            <img src="assets/images/mekarlogo.png" alt="Logo" height="70">
            <h3 class="mt-3">Login</h3>
            <p class="text-muted">Silakan masuk ke akun Anda</p>
        </div>

        <form action="{{ url('/login') }}" method="POST">
            @csrf

            <!-- Email -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email" name="email" class="form-control" placeholder="email@email.com" required>
                </div>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                </div>
            </div>

            <!-- Remember -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">
                        Ingat saya
                    </label>
                </div>
            </div>

            <!-- Error -->
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Button -->
            <button type="submit" class="btn btn-login w-100 mb-3">
                <i class="fas fa-sign-in-alt me-1"></i> Login
            </button>
        </form>
    </div>

</body>

</html>
