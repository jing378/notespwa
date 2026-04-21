<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: #f4f6f9;
            font-family: system-ui, sans-serif;
            margin: 0;
            padding: 0;
        }
        .auth-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .auth-card {
            width: 90%;
            max-width: 400px;
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,.1);
            box-sizing: border-box;
        }
        .auth-card h5 {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        .auth-card input.form-control {
            padding: 10px;
            font-size: 1rem;
        }
        .input-group-text {
            background: transparent;
            border-right: none;
            border-color: #dee2e6;
            color: #6c757d;
        }
        .form-control {
            border-left: none;
        }
        .form-control:focus {
            border-color: #80bdff;
            box-shadow: none;
        }
        .input-group:has(.form-control:focus) .input-group-text {
            border-color: #80bdff;
            color: #0d6efd;
        }
    </style>
</head>
<body>
<div class="auth-container">
    <form action="{{ route('login') }}" method="POST" class="auth-card">
        @csrf
        <h5 class="text-center mb-3"><i class="fas fa-sign-in-alt"></i> Login</h5>
        <div class="mb-2">
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{ old('email') }}">
            </div>
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <button type="submit" class="btn btn-primary w-100">
            <i class="fas fa-sign-in-alt"></i> Login
        </button>
        <p class="text-center mt-3">
            Don't have an account? <a href="{{ route('register') }}">Register here</a>
        </p>
    </form>
</div>
</body>
</html>
