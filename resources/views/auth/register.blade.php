<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - BrewNest</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section class="auth-section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-5">

                <div class="auth-card">

                    <h2 class="auth-title">
                        Create Account
                    </h2>

                    <p class="auth-subtitle">
                        Daftar untuk menikmati layanan kami.
                    </p>

                    <form action="{{ route('auth.register') }}" method="post">
                        @csrf
                        <div class="mb-4">

                            <label class="form-label">
                                Full Name
                            </label>

                            <input type="text" name="name" class="form-control @error('name')
                                is-invalid
                            @enderror custom-input" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">

                            <label class="form-label">
                                Email
                            </label>

                            <input type="email" name="email" class="form-control @error('email')
                                is-invalid
                            @enderror custom-input" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">

                            <label class="form-label">
                                Password
                            </label>

                            <input type="password" name="password" class="form-control @error('password')
                                is-invalid
                            @enderror custom-input">
                            @error('password')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-custom w-100 py-3">
                            Register
                        </button>

                    </form>

                    <p class="auth-footer">
                        Sudah punya akun?
                        <a href="{{ route('login') }}">Login</a>
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
@include('sweetalert::alert')

</body>
</html>