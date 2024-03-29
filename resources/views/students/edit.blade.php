@extends('layouts/main')

@section('title', 'Form Ubah Data Mahasiswa')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">
      <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>

      <form method="post" action="/students/{{$student->id}}">
        @method('patch')
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{$student->nama}}">
          @error('nama') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
          <label for="npm">NPM</label>
          <input type="text" class="form-control @error('npm') is-invalid @enderror" id="npm" placeholder="Masukkan NPM" name="npm" value="{{$student->npm}}">
          @error('npm') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{$student->email}}">
          @error('email') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>  
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{$student->jurusan}}">
          @error('jurusan') <div class="invalid-feedback">{{$message}}</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
      </form>
      
    </div>
  </div>
</div>
@endsection