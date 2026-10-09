<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use App\Models\Publikasi;

class PublikasiController extends Controller
{
  public function index()
  {
    $publikasi = Publikasi::paginate(5);
    return view('publikasi.index', compact('publikasi'));
  }
  public function form()
  {
    return view('publikasi.form');
  }
  public function beranda()
  {
    return view('publikasi.beranda');
  }
  public function store(StoreNoteRequest $request)
  {
    $data = $request->safe()->except('sampul');

    if ($request->hasFile('sampul')) {
        $file = $request->file('sampul');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path('images'), $fileName);
        $data['sampul'] = $fileName;
    }

    Publikasi::create($data);
    return redirect()->back()->with('success','Publikasi berhasil ditambahkan!');
  }

  public function destroy(Publikasi $publikasi)
  {
    $publikasi->delete();
    return redirect()->back()->with('success','Publikasi berhasil dihapus!');
  }
}