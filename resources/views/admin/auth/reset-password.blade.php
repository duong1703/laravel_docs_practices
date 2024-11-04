<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><b>Laravel</b><br>Documents for practice</h3>
                <hr>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <form action="{{ route('password.update') }}" method="post">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="form-control @error('email') is-invalid @enderror" placeholder="Email" required>
                        @error('email')
                        <p class="alert alert-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" value="{{ old('password') }}"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                            required>
                        @error('password')
                        <p class="alert alert-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"
                            class="form-control @error('password_confirmation') is-invalid @enderror"
                            placeholder="Confirm Password" required>
                        @error('password_confirmation')
                        <p class="alert alert-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                </form>

        </div>
    </div>
</body>

</html>