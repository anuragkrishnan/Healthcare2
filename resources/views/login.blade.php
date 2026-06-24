<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Care System | Login</title>

    <!-- Bootstrap 5.3.7 -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="{{ asset('css/bootstrap-icons.min.css') }}" rel="stylesheet">


    <style>
        :root {
            --hospital-primary: #9bb9e5;
            --hospital-secondary: #0b7285;
            --hospital-bg: #f8fafc;
        }

        body {
            min-height: 100vh;
            background: #f8fafc;
            font-family: "Segoe UI", sans-serif;
            margin: 0;
        }

        .login-wrapper {
            height: 100vh;
        }

        .brand-section {
            position: relative;
            background-image: url('{{ asset('images/doctor_bg.webp') }}');
            background-size: cover;
            background-position: center;
        }

        .brand-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(155, 188, 229, 0.65);
        }

        .brand-content {
            position: relative;
            z-index: 2;
            color: #fff;
            padding: 50px;
        }

        .brand-section h1 {
            font-weight: 700;
        }

        .login-card {
            max-height: 90vh;
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, .08);
        }

        .btn-login {
            height: 45px;
            border-radius: 12px;
            font-weight: 600;
        }

        .security-note {
            font-size: .85rem;
            color: #6c757d;
        }

        .form-control {
            height: 45px !important;
            border-radius: 12px;
        }

        @media (max-width: 991px) {
            .brand-section {
                display: none !important;
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row login-wrapper">

            <!-- Left Branding Panel -->
            <div class="col-lg-6 d-none d-lg-flex flex-column justify-content-center brand-section">
                <div class="brand-content">
                    <h1>Hospital Management System</h1>
                    <p>Secure access for healthcare professionals</p>
                </div>
            </div>

            <!-- Login Form -->
            <div class="col-lg-6 d-flex align-items-center justify-content-center p-4">

                <div class="card login-card w-100" style="max-width: 500px;">
                    <div class="card-body p-5">

                        <div class="text-center mb-4">
                            <div class="mb-1">
                                <i class="bi bi-heart-pulse-fill text-primary fs-1"></i>
                            </div>

                            <h3 class="fw-bold">Welcome Back!</h3>

                            <p class="text-muted">
                                Sign in to access the hospital portal
                            </p>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('auth.login') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Username</label>

                                <input type="text" name="username" value="{{ old('username') }}"
                                    class="form-control form-control-sm" placeholder="Enter your username" required
                                    autofocus>

                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Password</label>

                                <div class="input-group">
                                    <input type="password" id="password" name="password"
                                        class="form-control form-control-sm" placeholder="Enter your password" required>

                                    <button type="button" class="btn btn-outline-secondary" onclick="togglePassword()">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>

                            <!--div class="d-flex justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" class="form-check-input" id="remember">

                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>

                                <a href="#" class="text-decoration-none">
                                    Forgot Password?
                                </a>
                            </div-->

                            <button type="submit" class="btn btn-primary btn-login w-100">
                                <i class="bi bi-box-arrow-in-right me-2"></i>
                                Login
                            </button>
                        </form>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById('password');

            password.type = password.type === 'password' ?
                'text' :
                'password';
        }
    </script>

</body>

</html>
