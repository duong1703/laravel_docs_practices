<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><b>Laravel</b><br>Documents for practice</h3>
            <hr>
            <form action="{{ route('login.store') }}" method="post">
            @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                </div>
                @error('email')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                </div>
                @error('password')
                    <p class="alert alert-danger">{{ $message }}</p>
                @enderror
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <hr>
                <p class="text-center">Don't have account? <a href="{{ route('register') }}">Register</a> now!</p>
                <p class="text-center">Forgot Password? <a href="{{ route('password.request') }}">Reset</a></p>
            </form>
        </div>
    </div>
</body>
</html>