<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BudayaController;
use App\Http\Controllers\Backend\DestinasiController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\KategoriController;
use App\Http\Controllers\Backend\OrderController;
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


    Route::controller(KategoriController::class)->group(function () {
        Route::get('/kategori', 'index')->name('kategori');
        Route::post('/insert/kategori', 'insertKategori')->name('insert.kategori');
        Route::post('/update/kategori', 'updateKategori')->name('update.kategori');
        Route::get('/hapus/kategori/{id}', 'hapusKategori')->name('hapus.kategori');
    });

    Route::controller(DestinasiController::class)->group(function () {
        Route::get('/destinasi', 'index')->name('destinasi');
        Route::get('/destinasi/checkSlug', 'checkSlug');
        Route::get('/tambah/destinasi', 'tambahDestinasi')->name('tambah.destinasi');
        Route::post('/store/destinasi', 'storeDestinasi')->name('store.destinasi');
        Route::get('/ubah/destinasi/{slug}', 'ubahDestinasi')->name('ubah.destinasi');
        Route::get('/detail/destinasi/{slug}', 'detailDestinasi')->name('detail.destinasi');
        Route::post('/update/destinasi', 'updateDestinasi')->name('update.destinasi');
        Route::get('/hapus/destinasi/{slug}', 'hapusDestinasi')->name('hapus.destinasi');
    });

    Route::controller(EventController::class)->group(function () {
        Route::get('/event', 'index')->name('event');
        Route::get('/event/checkSlug', 'checkSlug');
        Route::get('/tambah/event', 'tambahEvent')->name('tambah.event');
        Route::post('/store/event', 'storeEvent')->name('store.event');
        Route::get('/detail/event/{slug}', 'detailEvent')->name('detail.event');
        Route::get('/ubah/event/{slug}', 'ubahEvent')->name('ubah.event');
        Route::post('/update/event', 'updateEvent')->name('update.event');
        Route::get('/hapus/event/{slug}', 'hapusEvent')->name('hapus.event');
    });


    Route::controller(BudayaController::class)->group(function () {
        Route::get('/budaya', 'index')->name('budaya');
        Route::get('/budaya/checkSlug', 'checkSlug');
        Route::get('/tambah/budaya', 'tambahBudaya')->name('tambah.cagarbudaya');
        Route::post('/store/budaya', 'storeBudaya')->name('store.cagarbudaya');
        Route::get('/ubah/budaya/{slug}', 'ubahBudaya')->name('ubah.cagarbudaya');
        Route::post('/update/budaya', 'updateBudaya')->name('update.cagarbudaya');
        Route::get('/detail/budaya/{slug}', 'detailBudaya')->name('detail.cagarbudaya');
        Route::get('/hapus/budaya/{slug}', 'hapusBudaya')->name('hapus.cagarbudaya');
    });

    Route::controller(OrderController::class)->group(function () {
        Route::get('/order', 'index')->name('order');
        Route::get('/detail/order/{ud}', 'detailOrder')->name('detail.order');
    });
});



require __DIR__ . '/auth.php';
