<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get("/",[AppController::class,"home"]);
Route::get("data-wisata",[AppController::class,"data_wisata"]);

Route::get('tambah-wisata', [AppController::class, 'tambah_wisata']);
Route::post('proses-tambah-wisata', [AppController::class, 'proses_tambah_wisata'])->name('destinations.tambah');

Route::get("data-wisata/{id}/hapus",[AppController::class,"hapus_wisata"]);

Route::get("data-wisata/{id}/edit",[AppController::class,"edit_wisata"]);
Route::post("edit-wisata", [AppController::class, 'proses_edit_wisata'])->name('destinations.edit');

