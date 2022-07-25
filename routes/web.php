<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\MasukController;
use App\Http\Controllers\BayarTiketController;
use App\Http\Controllers\Auth\DaftarController;
use App\Http\Controllers\UserPages\PesanController;
use App\Http\Controllers\PublicPages\BerandaController;
use App\Http\Controllers\AdminDashboard\HomeDashController;
use App\Http\Controllers\PublicPages\DetailEventController;

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

Route::get('/',[BerandaController::class,'index']);
Route::get('/beranda', [BerandaController::class, 'index']);

Route::get('/masuk', [MasukController::class, 'index'])->name('login')->middleware('guest');
Route::post('/masuk', [MasukController::class, 'masuk']);
Route::any('/keluar', [MasukController::class, 'keluar']);

Route::get('/daftar', [DaftarController::class, 'index'])->middleware('guest');
Route::post('/daftar', [DaftarController::class, 'daftarkan']);

Route::get('/event/{event:slug}', [DetailEventController::class, 'index']);
Route::get('/pesan/{event:slug}', [PesanController::class, 'index'])->middleware('auth');

// Route::get('/pesan/techweek2022', function(){
//     return view('pesan_tiket.index', [
//         'title' => 'Form Peserta | CCI Summit 2022',
//         'onstep' => 'pesan'
//     ]);
// })->middleware('auth');

Route::get('/bayar/techweek2022', [BayarTiketController::class, 'index'])->middleware('auth');

Route::get('/tiketsaya', function(){
    return view('tiket_saya.index', [
        'title' => 'Tiket Saya | CCI Summit 2022',
    ]);
})->middleware('auth');

Route::get('/transaksisaya', function(){
    return view('transaksi_saya.index', [
        'title' => 'Transaksi Saya | CCI Summit 2022',
    ]);
})->middleware('auth');

Route::get('/ecert', function(){
    return view('ecert_saya.index', [
        'title' => 'Sertifikat Saya | CCI Summit 2022',
    ]);
})->middleware('auth');

Route::get('/blog', function(){
    return view('blog_pengumuman.index', [
        'title' => 'Blog & Pengumuman | CCI Summit 2022',
    ]);
});

Route::get('/akunsaya', function(){
    return view('akun_saya.index', [
        'title' => 'Blog & Pengumuman | CCI Summit 2022',
    ]);
})->middleware('auth');

Route::get('/blog/at-vero-eos', function(){
    $judul = "At vero eos accusamu iusto odio dignissimos ducimus blanditiis praesentium voluptatum";
    return view('blog_post.index', [
        'title' => $judul.' | CCI Summit 2022',
    ]);
});

Route::get('/dashboard', [HomeDashController::class, 'index'])->middleware('adminonly');




