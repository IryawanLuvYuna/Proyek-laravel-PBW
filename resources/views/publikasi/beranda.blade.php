<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <title>BPS Provinsi Sulawesi Tengah</title>
</head>
<body>
  <nav class="navbar navbar-expand-sm mb-0" style="background-color: #002B6A;">
    <div class="container-fluid">
      <img src="/images/logo.png" alt="Avatar Logo" style="width: 7vh;" class="navbar-brand mx-0">
      <div class="container-fluid d-flex flex-column flex-wrap text-white fw-bold fst-italic fs-5 my-auto" style="font-family: sans-serif;">
        <p class="m-0">Badan Pusat Statistik</p><p class="m-0">Provinsi Sulawesi Tengah</p>
      </div>
    </div> 
    <div class="container-fluid d-flex flex-row-reverse">
      <ul class="navbar-nav">
        <li class="nav-item p-2">
          <a class="nav-link active border-3 border-bottom text-white" href="{{route('beranda')}}">Home</a>
        </li>
      <li class="nav-item p-2">
          <a class="nav-link text-white" href="{{route('index')}}">Daftar Publikasi</a>
        </li>
        <li class="nav-item p-2">
          <a class="nav-link text-white" href="{{route('form')}}">Tambah Publikasi</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid bg-image d-flex justify-content-center align-items-center p-0" style="height: 89vh; background: #002B6A url('/images/gedung_bps.jpg'); background-repeat: no-repeat; background-size: cover; background-blend-mode: overlay;">
    <h2 class="text-white text-center">Selamat Datang di Portal BPS<br>Provinsi Sulawesi Tengah</h2>
  </div>
</body>
</html>