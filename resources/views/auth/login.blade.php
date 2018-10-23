<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bendeck Admin Login</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
<form class="form-signin" method="post" action="{{ route('login') }}">
    @csrf
    <div class="mb-4">
        <h1 class="">Bendeck Insurance</h1>
        <p class="h3">Admin Login</p>
    </div>
    <div class="form-group">
        <label for="inputEmail">Email address</label>
        <input type="email" id="inputEmail" class="{{ $errors->has('email') ? 'form-control is-invalid' : 'form-control' }}" placeholder="example@example.com" name="email" value="{{ old('email') }}" required autofocus>
        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" id="inputPassword" name="password" class="{{ $errors->has('password') ? 'form-control is-invalid' : 'form-control' }}" placeholder="" required>
        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
    </div>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
        </label>
    </div>
    <button class="btn btn-primary btn-block mb-3" type="submit">Sign in</button>
    <p><a href="#">Forgot Password?</a></p>
</form>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
