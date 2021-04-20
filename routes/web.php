<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\KategoriWisataController;

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

Route::get('/', [DashboardController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Wisata
Route::get('/wisata', [App\Http\Controllers\WisataController::class, 'index'])->name('wisata');
Route::get('/wisata/add', [App\Http\Controllers\WisataController::class, 'add']);
Route::post('/wisata/store', [App\Http\Controllers\WisataController::class, 'store']);
Route::get('/wisata/edit/{id_travel}', [App\Http\Controllers\WisataController::class, 'edit']);
Route::get('/wisata/delete/{id_travel}', [App\Http\Controllers\WisataController::class, 'delete']);
Route::resource('manajemen-travel', WisataController::class);

//Kategori Wisata
Route::get('/kategoriWisata', [KategoriWisataController::class, 'index'])->name('kategoriWisata');
Route::resource('manajemen-kategoritravel', KategoriWisataController::class);
