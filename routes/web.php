<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kontakcontroller;
use App\Http\Controllers\WhatsAppController;

Route::get('/', function () {
    return view('login');
});

//Route::get('/', [adminController::class, 'login']);
//Route::post('/', [adminController::class, 'verifyLogin']);

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/pesan-diterima', function () {
    return view('pesan-diterima');
});

Route::get('/pesan-terkirim', function () {
    return view('pesan-terkirim');
});

Route::get('/pesan-penting', function () {
    return view('pesan-penting');
});

//Route::get('/kontak', [KontakController::class, 'see']);
//Route::post('/kontak', [KontakController::class, 'lihat']);

//Route::get('/kontak', function () {
 //   return view('kontak');
//});

Route::get('/kontak', [KontakController::class, 'lihatKontak']);


Route::get('/tambah-kontak', [KontakController::class, 'simpan']);
Route::post('/tambah-kontak', [KontakController::class, 'simpanKontak']);

Route::get('/cari-kontak', function () {
    return view('cari-kontak');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/send-message', [WhatsAppController::class, 'showMessages'])->name('send-message-form');
Route::get('/get-messages', [WhatsAppController::class, 'getMessages'])->name('get-messages');
Route::post('/send-message', [WhatsAppController::class, 'sendMessage'])->name('send-message');
Route::get('/percakapan', [WhatsAppController::class, 'lihatpesan']);