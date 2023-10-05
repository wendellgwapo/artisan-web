<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artisan | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class=" navbar navbar-expand navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Artisan</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            @guest
                
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('register') }}" class="nav-link">register</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('login') }}" class="nav-link">login</a>
                </li>
            @else
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('admin/login') }}" class="nav-link">admin login</a>
                </li>
            @endguest
        </ul>
    </nav>
    <!-- /.navbar -->
    
    <div class="hold-transition login-page">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="#" class="h1"><b>Admin</b>Login</a>
                </div>
                <div class="card-body">
                    @if (session('error'))
                        <div class="text-danger text-center">{{ session('error') }}</div>
                    @endif

                    @if (session('success'))
                        <div class="text-success text-center">{{ session('success') }}</div>
                    @endif

                    <p class="login-box-msg">Please fill in this form to login an account.</p>

                    <form action="{{ route('postLogin') }}" method="post">
                        @csrf
                        <div class="input-group mb-1">
                            <input name="email" type="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="input-group mb-1">
                            <input name="password" type="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input name="remember" type="checkbox" id="remember">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="../../plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../dist/js/adminlte.min.js"></script>
    </div>
</body>

</html>
