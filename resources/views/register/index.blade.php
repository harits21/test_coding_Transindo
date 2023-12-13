@extends('layouts.main')

@section('content')
<form action="/register" method="POST">
    @csrf
    <div class="mb-2">
      <label for="name" class="form-label">Nama</label>
      <input type="text" name="name" class="form-control @error('name')
          is-invalid
      @enderror" id="name" required value="{{old('name')}}">
      @error('name')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="mb-2">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control @error('email')
          is-invalid
      @enderror" id="email" required value="{{old('email')}}">
      @error('email')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="mb-2">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control @error('password')
            is-invalid
        @enderror" id="password" required>
        @error('password')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="mb-2">
        <label for="alamat" class="form-label">alamat</label>
        <input type="text" name="alamat" class="form-control @error('alamat')
            is-invalid
        @enderror" id="alamat" required value="{{old('alamat')}}">
        @error('alamat')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="mb-2">
        <label for="no_telepon" class="form-label">No. Telepon</label>
        <input type="number" name="no_telepon" class="form-control @error('no_telepon')
            is-invalid
        @enderror" id="no_telepon" required value="{{old('no_telepon')}}">
        @error('no_telepon')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
      </div>
      <div class="mb-1">
        <label for="no_sim" class="form-label">Nomor SIM A</label>
        <input type="number" name="no_sim" class="form-control @error('no_sim')
            is-invalid
        @enderror" id="no_sim" required value="{{old('no_sim')}}">
        @error('no_sim')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
        <div id="no_simHelp" class="form-text">Kami akan menjamin kerahasiaan data diri anda</div>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <center>
      <small>Sudah punya akun? <a href="/login">Login disini</a></small>
  </center>
@endsection