<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\Frontcontroller;
// import controller
use App\Http\Controllers\PenulisController;
// import movie controller
use App\Models\AlbumMusik;
// import artikel controller
use App\Models\Film;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/halaman2', function () {
    return view('animals');
});

Route::get('/halaman3', function () {
    return view('fruits');
});

Route::get('/about', function () {
    $nama = "Azmi";
    $jk = "Pria";
    $pendidikan_terakhir = "S5";
    $pekerjaan = "Main Tank";
    return view('Biodata', compact('nama', 'jk', 'pendidikan_terakhir', 'pekerjaan'));
});

// parameter
Route::get('/sample/{nama}/{kelas}', function (Request $request, $nama, $kelas) {
    $nama2 = $nama;
    $kelas2 = $kelas;
    return view('sample', compact('nama2', 'kelas2'));
});

// Route Siswa
Route::get('siswa', function () {

    return view('siswa');
});

// Route Sekolah
Route::get('sekolah', function () {

    return view('sekolah');
});

Route::get('album', function () {
    return view('album');
});

Route::get('film', function () {
    return view('Film');
});

Route::get('film/{id}', function (int $id) {
    return view('detail-film', ['film' => Film::findOrFail($id)]);
});

// route  with cont
Route::get('perkenalan', [MyController::class, 'introduce']);
Route::get('hewan', [MyController::class, 'animals']);

// route movie
Route::get('movie', [MovieController::class, 'getMovie'])->middleware('auth');
Route::get('movie/{id}', [MovieController::class, 'getMovieById']);

// route artikel
Route::get('artikel', [ArtikelController::class, 'getArtikel']);
Route::get('artikel/{id}', [ArtikelController::class, 'getArtikelById']);
Route::get('artikel/kategori/{kategori}', [ArtikelController::class, 'getArtikelByKategori']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route crud
Route::group(['prefix' => 'admin', 'middleware ' => ['auth']], function () {
    Route::resource('penulis', PenulisController::class);
    Route::resource('genre', GenreController::class);
    Route::resource('buku', BukuController::class);
});

// Route
Route::get('/', [Frontcontroller::class, 'buku']);
Route::get('buku/{id}', [Frontcontroller::class, 'detailBuku']);