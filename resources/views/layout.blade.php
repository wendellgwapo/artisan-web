<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#A">Artisan</a>
            </div>
            <ul class="nav navbar-nav">
                
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#E">EMPLOYER</a></li>
                <li><a href="#S">SKILLED WORKERS</a></li>
                <li><a href="#T">TUTORIAL</a></li>
                <li><a href="#A">ABOUT US</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ url('admin/home') }}"><span class="glyphicon glyphicon-log-in"></span>Admin Dashboard</a></li>
                    <li><a href="{{ url('admin/login') }}"><span class="glyphicon glyphicon-log-in"></span>Admin Login</a></li>
                    <li><a href="register"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                    <li><a href="{{ url('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                @else
                    <li><a href="{{ url('logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                @endguest
            </ul>
        </div>
    </nav>

    @yield('content')
</body>

</html>
