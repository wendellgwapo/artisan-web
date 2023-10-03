{{-- @extends('layout')
@section('content') --}}

    @if (Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <form method="post" action="{{ route('login_employer.post') }}">
        @csrf
        <div class="container">
            <h1>Login</h1>
            <p>Please fill in this form to login an account.</p>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif

            <hr>

            <button type="submit" class="registerbtn">Login</button>
        </div>

        <div class="container signin">
            <p>Dont have an account? <a href="signup_employer">Sign up</a>.</p>
        </div>
    </form>

{{-- @endsection --}}
