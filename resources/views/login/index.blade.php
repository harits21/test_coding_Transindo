@extends('layouts.main')

@section('content')

@if (session('message'))
    <h6 class="alert alert-success">
        {{session('message')}}
    </h6>
@endif

@if (session('loginError'))
<h6 class="alert alert-danger">
    {{session('loginError')}}
</h6>
@endif

<form action="/login" method="POST">
    @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control @error('email')
          is-invalid
      @enderror" id="email" name="email" autofocus required value="{{old('email')}}">
      @error('email')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control @error('password')
          is-invalid
      @enderror" id="password" name="password">
      @error('password')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <center>
      <small>Belum punya akun? <a href="/register">Registrasi disini</a></small>
  </center>
@endsection