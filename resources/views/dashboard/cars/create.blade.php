@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Mobil</h1>
  </div>

  <a href="/dashboard/cars" class="btn btn-primary">Kembali halaman sebelumnya</a>

  <form action="/dashboard/cars" method="POST">
    @csrf
    <div class="mt-3">
      <label for="merek" class="form-label">Merek</label>
      <select class="form-select" aria-label="Default select example" name="merek" autofocus>
        <option selected>Open this select brand of car</option>
        <option value="Toyota">Toyota</option>
        <option value="Honda">Honda</option>
        <option value="Daihatsu">Daihatsu</option>
      </select>
    </div>
    <div class="mt-3">
      <label for="model" class="form-label">Model</label>
      <input type="model" class="form-control @error('model')
          is-invalid
      @enderror" id="model" name="model">
      @error('model')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="mt-3">
        <label for="no_plat" class="form-label">No Polisi</label>
        <input type="no_plat" class="form-control @error('no_plat')
            is-invalid
        @enderror" id="no_plat" name="no_plat">
        @error('no_plat')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="mt-3">
        <label for="tarif" class="form-label">Tarif</label>
        <input type="tarif" class="form-control @error('tarif')
            is-invalid
        @enderror" id="tarif" name="tarif">
        @error('tarif')
        <div class="invalid-feedback">
          {{$message}}
        </div>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
  </form>
  
@endsection