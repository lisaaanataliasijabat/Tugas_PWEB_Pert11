<?php
use Illuminate\Support\Facades\Route;
use App\Models\Prodi;

Route::get('/', function () {
    return view('welcome');
});

// Tambah data
Route::get('/prodi/create', function () {
    Prodi::create([
        'kode_prodi' => 'TInd01',
        'nama_prodi' => 'Teknik Industri'
    ]);
    return "Berhasil tambah data prodi";
});

// Lihat data
Route::get('/prodi/lihat', function () {
    $prodis = Prodi::all();
    foreach ($prodis as $data) {
        echo $data->kode_prodi . " - " . $data->nama_prodi . "<br>";
    }
});
