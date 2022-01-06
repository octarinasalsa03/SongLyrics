@extends('layouts.main')

@section('container')
<main class="form-signin">
  <form action="/register" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Registration</h1>
    <div class="form-floating">
      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="name@example.com">
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
  </form>

  <small class="d-block text-center mt-3">
    Already have account? <a href="/login">Login Now!</a>
  </small>
</main>

@endsection
