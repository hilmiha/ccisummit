<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BayarTiketController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloworld', function () {
    return view('helloworld');
});

Route::get('/masuk', function () {
    return view('masuk.index',[
        'title' => 'Masuk | CCI Summit 2022',
    ]);
});

Route::get('/daftar', function () {
    return view('daftar.index',[
        'title' => 'Buat Akhun Baru | CCI Summit 2022',
    ]);
});

Route::get('/beranda', function () {
    return view('beranda.index',[
        'title' => 'Beranda | CCI Summit 2022',
    ]);
});

Route::get('/event/techweek2022', function(){
    return view('event_detail.index', [
        'title' => 'Tech Week 2022 | CCI Summit 2022',
    ]);
});

Route::get('/pesan/techweek2022', function(){
    return view('pesan_tiket.index', [
        'title' => 'Form Peserta | CCI Summit 2022',
        'onstep' => 'pesan'
    ]);
});

Route::get('/bayar/techweek2022', [BayarTiketController::class, 'index']);

Route::get('/tiketsaya', function(){
    return view('tiket_saya.index', [
        'title' => 'Tiket Saya | CCI Summit 2022',
    ]);
});

Route::get('/transaksisaya', function(){
    return view('transaksi_saya.index', [
        'title' => 'Transaksi Saya | CCI Summit 2022',
    ]);
});

Route::get('/ecert', function(){
    return view('ecert_saya.index', [
        'title' => 'Sertifikat Saya | CCI Summit 2022',
    ]);
});
