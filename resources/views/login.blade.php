@extends('welcome')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<body class="hold-transition login-page"  >


  <div class="login-box">

  <div class="card card-outline card-primary">
  <div class="card-header text-center">
  <a href="" class="h1"><b>ISSAT</b>SO</a><br>
  <img src="{{ asset('/images/issat.jpeg') }}" alt=""  width="100px" height="50px">
  </div>
  <div class="card-body">
  <p class="login-box-msg">Sign in to start your session</p>
  <form method="POST" action="{{ route('login') }}">
  @csrf
    <div class="input-group mb-3">
    <input type="email" class="form-control" placeholder="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email">
    <div class="input-group-append">
    <div class="input-group-text">
    <span class="fas fa-envelope"></span>
    </div>
    </div>
    </div>
    <div class="input-group mb-3">
    <input type="password" class="form-control"  placeholder="Password" name="password" id="password" required autocomplete="current-password">
    <div class="input-group-append">
    <div class="input-group-text">
    <span class="fas fa-lock"></span>
    </div>
    </div>
    </div>
  <div class="row">
    <div class="col-8">
    <div class="icheck-primary">
    <input type="checkbox"  id="remember" name="remember">
    <label for="remember">
    Remember Me
    </label>
    </div>
    </div>

    <div class="col-4">
    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
    </div>
  </div>
  </form >

  <div class="social-auth-links text-center mt-2 mb-3">
  <a href="#" class="btn btn-block btn-primary">
  <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
  </a>
  <a href="#" class="btn btn-block btn-danger">
  <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
  </a>
  </div>

  <p class="mb-1">
  <a href="/forget-password">I forgot my password</a>
  </p>
  <p class="mb-0">
  <a href="/students/signup" class="text-center">Register a new membership</a>
  </p>
  </div>

  </div>

  </div>
</body>
@endsection
