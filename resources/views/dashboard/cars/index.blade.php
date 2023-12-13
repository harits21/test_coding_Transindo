@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Database Mobil</h1>
  </div>

  @if (session('message'))
<h6 class="alert alert-danger">
    {{session('message')}}
</h6>
@endif
  <a href="/dashboard/cars/create" class="btn btn-primary">Tambah Data Mobil</a>

  <div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Merek</th>
          <th scope="col">Model</th>
          <th scope="col">Nomor Polisi</th>
          <th scope="col">Tarif</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($cars as $car)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$car->merek}}</td>
            <td>{{$car->model}}</td>
            <td>{{$car->no_plat}}</td>
            <td>Rp. {{$car->tarif}} / Hari</td>
            <td>Detail</td>
        </tr>
        @endforeach
      </tbody>
    </table>

@endsection