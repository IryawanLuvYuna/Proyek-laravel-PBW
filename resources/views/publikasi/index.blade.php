<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <title>Daftar Publikasi BPS Provinsi Sulawesi Tengah</title>
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
          <a class="nav-link active border-3 border-bottom text-white" href="{{route('index')}}">Daftar Publikasi</a>
        </li>
        <li class="nav-item p-2">
          <a class="nav-link text-white" href="{{route('form')}}">Tambah Publikasi</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid d-flex flex-column justify-content-center rounded-3 shadow p-0" style="width: 168vh">
    <table cellpadding="2" cellspacing="0" class="table table-hover table-sm">
      <thead>
        <tr>
        <th class="text-white rounded-start-3" style="background-color: #0093DD;">No</th>
        <th class="text-white" style="background-color: #0093DD;">Judul</th>
        <th class="text-white" style="background-color: #0093DD;">Tanggal Rilis</th>
        <th class="text-white" style="background-color: #0093DD;">Sampul</th>
        <th class="text-white text-center rounded-end-3" style="background-color: #0093DD;">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($publikasi as $item)
        <tr>
          <td>{{ $loop->iteration + $publikasi->firstItem() - 1 }}</td>
          <td>{{ Str::limit($item->judul,70) }}</td>
          <td>{{ $item->tanggal_rilis }}</td>
          <td>
            <img src="/images/{{ $item->sampul }}" alt="{{ $item->judul }}" width="48">
          </td>
          <td>
            <div class="d-flex flex-row justify-content-center">
              <a href="#" class="btn btn-success btn-sm">Edit</a>
              <form action="{{ route('publikasi.destroy', $item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm ms-2" onclick="return confirm('Yakin ingin menghapus publikasi ini?')">Hapus</button>
              </form>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="d-flex justify-content-end m-2">{{$publikasi->links()}}</div>
  </div>
</body>
</html>