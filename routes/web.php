<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Models\Gallery;

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



Route::get('/', function() {
    return view('index', [
        "title" => "Beranda"
    ]);
});

Route::get('/about', function(){
    return view('about', [
    "title" => "About App",
    "nama" => "Prakerinoted App",
    "email" => "Prakerinoted App adalah sistem website yang dibuat untuk mereport kegiatan saat Magang atau PKL dengan tujuan untuk memudahkan dalam penglistan/mendata siswa yang akan melakukan Magang/PKL. ",
    "gambar" => "Arsya.JPG"
    ]);
});

Route::get('gallery', [GalleryController::class, 'tampil']);

Route::get('/contacts', function () {
    return view ('contacts', [
        "title" => "Contacts"
    ]);
});

//Route::resource('/contacts', ContactController::class);
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/gallery/index', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/gallery/tampil', [GalleryController::class, 'tampil'])->name('gallery.create');


Auth::routes();

Route::group(['middleware' => ['auth']], function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::post('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update');
Route::get('/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy');


//Route::resource('gallery', GalleryController::class);
Route::get('/gallery/tambah', [GalleryController::class, 'tambah'])->name('gallery.tambah');
Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
Route::get('/gallery/{id}/edit', [GalleryController::class, 'edit'])->name('admin.gallery.edit');
Route::post('/gallery/{id}/update', [GalleryController::class, 'update'])->name('gallery.update');
Route::get('/gallery/{id}/destroy', [GalleryController::class, 'destroy'])->name('gallery.destroy');
});