@extends('layouts.single-pages')

@section('styles')
<style>
.auth-section {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #fff;
  color: #d57327 !important;
}
.auth-card {
  width: 100%;
  max-width: 450px;
  padding: 2rem;
  border-radius: 1rem;
  box-shadow: 0 8px 24px rgba(0,0,0,.1);
  background: #fff;
}
.auth-title {
  text-align: center;
  color: #000000ff !important;
  margin-bottom: 1.5rem;
}
.auth-btn {
  width: 100%;
  border-radius: 999px;
  background: #d57327;
  border: none;
  padding: .75rem;
  font-weight: 600;
  color: #ffffffff !important;
}
.auth-btn:hover {
  background: #b15b1f;
}
.form-label {
  color: #d57327 !important;
}
</style>
@endsection

@section('content')
<section class="auth-section mt-3">
  <div class="auth-card">

    <h4 class="auth-title">Login to your Deboned account</h4>

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input id="email" type="email"
               class="form-control custom-input @error('email') is-invalid @enderror"
               name="email" value="{{ old('email') }}" required autofocus>
        @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input id="password" type="password"
               class="form-control custom-input @error('password') is-invalid @enderror"
               name="password" required>
        @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
      </div>

      <div  class="mb-3 form-check">
        <input class="form-check-input" type="checkbox" name="remember" id="remember"
               {{ old('remember') ? 'checked' : '' }}>
        <label style="color:black !important;" class="form-check-label" for="remember">
          Remember Me<br>
        </label>
      </div>

      <button type="submit" class="btn auth-btn">Login</button>

      @if (Route::has('password.request'))
        <p class="text-center mt-3">
          <a style="color:black !important; font-size:1rem;" href="{{ route('password.request') }}">
            <br>Forgot Your Password?
          </a>
        </p>
      @endif

      <p style="color:black !important; font-size:1rem;" class="text-center mt-2">
        Don’t have an account? 
        <a style="color:black !important;" href="{{ route('register') }}">Register</a>
      </p>
    </form>
  </div>
</section>
@endsection
