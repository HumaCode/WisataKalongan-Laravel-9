<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\DestinasiController;
use App\Http\Controllers\Backend\KategoriController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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



    return view('welcome');
});

Route::get('/dashboard', function () {

    $title      = 'Dashboard';
    $menu       = '';
    $submenu    = 'dashboard';

    return view('index', compact('title', 'submenu', 'menu'));
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {

    // profile
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::post('/profile/store', [AdminController::class, 'profileStore'])->name('profile.store');
    Route::get('/ubah/password', [AdminController::class, 'ubahPassword'])->name('ubah.password');
    Route::post('/update/password', [AdminController::class, 'updatePassword'])->name('update.password');



    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(KategoriController::class)->group(function () {
    Route::get('/kategori', 'index')->name('kategori');
    Route::post('/insert/kategori', 'insertKategori')->name('insert.kategori');
    Route::post('/update/kategori', 'updateKategori')->name('update.kategori');
    Route::get('/hapus/kategori/{id}', 'hapusKategori')->name('hapus.kategori');
});

Route::controller(DestinasiController::class)->group(function () {
    Route::get('/destinasi', 'index')->name('destinasi');
    Route::get('/tambah/destinasi', 'tambahDestinasi')->name('tambah.destinasi');
    Route::post('/store/destinasi', 'storeDestinasi')->name('store.destinasi');
});

require __DIR__ . '/auth.php';
