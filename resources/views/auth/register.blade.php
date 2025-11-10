@extends ('layouts.single-pages')

@section('styles')
<style>
.auth-section {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #fff;
   color: #d57327 !important ;
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
  color: #000000ff !important ;
  margin-bottom: 1.5rem;
}
.auth-btn {
  width: 100%;
  border-radius: 999px;
  background: #d57327;
  border: none;
  padding: .75rem;
  font-weight: 600;
   color: #ffffffff !important ;
}
.auth-btn:hover {
  background: #b15b1f;
}
.form-label{
     color: #d57327 !important ;
}


</style>
@endsection

@section('content')
<section class="auth-section mt-3">
  <div class="auth-card">

    <h4 class="auth-title">Create your Deboned account</h4>

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input id="name" type="text" 
               class="form-control custom-input @error('name') is-invalid @enderror" 
               name="name" value="{{ old('name') }}" required autofocus>
        @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input id="email" type="email" 
               class="form-control custom-input @error('email') is-invalid @enderror" 
               name="email" value="{{ old('email') }}" required>
        @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input id="password" type="password" 
               class="form-control custom-input @error('password') is-invalid @enderror" 
               name="password" required>
        @error('password') <span class="invalid-feedback">{{ $message }}</span> @enderror
      </div>

      <div class="mb-3">
        <label for="password-confirm" class="form-label">Confirm Password</label>
        <input id="password-confirm" type="password" class="form-control custom-input" 
               name="password_confirmation" required>
      </div>

      <button type="submit" class="btn auth-btn">Register</button>

      <p style="color:black !important; font-size:1rem;" class="text-center mt-3">
       <br> Already have an account? 
        <a style="color:black !important;" href="{{ route('login') }}">Login</a>
      </p>
    </form>
  </div>
</section>
@endsection
