@extends('site.layouts.master')

@section('content')



<br><br><br>
  <div class="login-box">

    {{-- ✅ رسائل النجاح أو الخطأ --}}
    @if(session('success'))
      <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
        {{ session('success') }}
      </div>
    @endif

    @if(session('error'))
      <div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
        {{ session('error') }}
      </div>
    @endif

    <h2>Login</h2>
    <form method="POST" action="{{ route('llogin') }}">
      @csrf
      <input type="email" name="email" placeholder="Enter email" required />
      <input type="password" name="password" placeholder="Enter password" required />
      <label><input type="checkbox" name="remember" /> Remember me</label>
      <br><br>
      <input type="submit" value="Login" />
    </form>
  </div>
@push('styles')
<style>

.login-box {
  max-width: 400px;
  margin: 50px auto;
  padding: 30px;
  border: 1px solid #ccc;
  border-radius: 8px;
  background-color: #f9f9f9;

  position: relative;
  z-index: 1000;
  pointer-events: auto !important;
}

.login-box input[type="email"],
.login-box input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-top: 10px;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;

  pointer-events: auto !important;
  background-color: white !important;
  color: black !important;
}

.login-box input[type="submit"] {
  margin-top: 15px;
  padding: 10px;
  width: 100%;
  background-color: #AA896F;
  border: none;
  color: white;
  border-radius: 4px;
}
</style>
@endpush

