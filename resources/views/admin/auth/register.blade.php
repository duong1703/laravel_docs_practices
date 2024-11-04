<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><b>Laravel</b><br>Documents for practice</h3>
                <hr>
                <form action="{{ route('register.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="form-control  @error('name') is-invalid @enderror" placeholder="Name">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="form-control  @error('email') is-invalid @enderror" placeholder="Email">
                    </div>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" value="{{ old('password') }}"
                            class="form-control  @error('password') is-invalid @enderror" placeholder="Password">
                    </div>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                    <hr>
                    <p class="text-center">Have an account? <a href="{{ route('login') }}">Login</a> now!</p>
                </form>
        </div>
    </div>
</body>

</html>