@extends('welcome')
@section('content')

<body class="hold-transition register-page">
<div class="register-box">
<div class="register-logo">
<a href=""><b>ISSAT</b>SO</a>
</div>
<div class="card">
<div class="card-body register-card-body">
<p class="login-box-msg">Register a new membership</p>
<form method="POST" action="{{ route('student.store') }}">
  @csrf
<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Full name" name="name" id="name" value="{{ old('name') }}" required>
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-user"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="email" class="form-control" placeholder="Email" name="email" id="email" value="{{ old('email') }}" required>
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="password" class="form-control" placeholder="Retype password" name="password1" id="password1" required>
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-8">
<div class="icheck-primary">
<input type="checkbox" id="agreeTerms" name="terms" value="agree">
<label for="agreeTerms">
I agree to the <a href="#">terms</a>
</label>
</div>
</div>

<div class="col-4">
<button type="submit" class="btn btn-primary btn-block">Register</button>
</div>

</div>
</form>
<div class="social-auth-links text-center">
<p>- OR -</p>
<a href="#" class="btn btn-block btn-primary">
<i class="fab fa-facebook mr-2"></i>
Sign up using Facebook
</a>
<a href="#" class="btn btn-block btn-danger">
<i class="fab fa-google-plus mr-2"></i>
Sign up using Google+
</a>
</div>
<a href="/login" class="text-center">I already have a membership</a>
</div>

</div>
</div>

</body>
@endsection
