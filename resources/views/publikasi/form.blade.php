<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA_Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Tambah Publikasi</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm mb-5" style="background-color: #002B6A;">
  <div class="container-fluid">
    <img src="/images/logo.png" alt="Avatar Logo" style="width: 7vh;" class="navbar-brand mx-0">
    <div class="container-fluid d-flex flex-column flex-wrap text-white fw-bold fst-italic fs-5 my-auto" style="font-family: sans-serif;">
      <p class="m-0">Badan Pusat Statistik</p><p class="m-0">Provinsi Sulawesi Tengah</p>
    </div>
  </div> 
  <div class="container-fluid d-flex flex-row-reverse">
    <ul class="navbar-nav">
      <li class="nav-item p-2">
        <a class="nav-link text-white" href="{{route('beranda')}}">Home</a>
      </li>
     <li class="nav-item p-2">
        <a class="nav-link text-white" href="{{route('index')}}">Daftar Publikasi</a>
      </li>
      <li class="nav-item p-2">
        <a class="nav-link active border-3 border-bottom text-white" href="{{route('form')}}">Tambah Publikasi</a>
      </li>
    </ul>
  </div>
</nav>
    @session('success')
      <div class="container-fluid d-flex justify-content-center rounded-3" style="width: 96vh;">
        <div class="container-fluid alert alert-success alert-dismissible fade show" role="alert" style="width: 52vh">
          {{$value}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    @endsession
  <div class="container d-flex flex-column shadow rounded-3 p-2 mb-5" style="height: 56vh; width: 96vh; background-color: #dbe1ff;">
    <div class="container-fluid d-flex justify-content-center my-5 fw-semibold fs-2" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Form Tambah Publikasi</div>
    <div class="container-fluid d-flex justify-content-center">
      <form action="{{route('form.store')}}" method="POST" style="width: 96vh" enctype="multipart/form-data" class="d-flex flex-column">
        @csrf
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Judul</label>
          <div class="col-sm-8">
            <input type="text" class="form-control shadow-sm @error('judul') is-invalid @enderror" value="{{old('judul')}}" placeholder="Judul minimal 8 karakter" name="judul">
            @error('judul')
              <span class="invalid-feedback">{{$message}}</span>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Tanggal Rilis</label>
          <div class="col-sm-8">
            <input type="date" class="form-control shadow-sm @error('tanggal_rilis') is-invalid @enderror" value="{{old('tanggal_rilis')}}" name="tanggal_rilis">
            @error('tanggal_rilis')
              <span class="invalid-feedback">{{$message}}</span>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Sampul</label>
          <div class="col-sm-8">
            <input type="file" accept=".jpg,.jpeg,.png" class="form-control shadow-sm @error('sampul') is-invalid @enderror" value="{{old('sampul')}}" name="sampul">
            @error('sampul')
              <span class="invalid-feedback">{{$message}}</span>
            @enderror
          </div>
        </div>
        <button type="submit" class="btn btn-primary shadow-sm mt-3 fw-bold">Submit</button>
      </form>
    </div>
  </div>
</body>
</html>