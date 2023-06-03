<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
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

Route::get('/login', function () {
    return view('Content.login');
})->name('login')->middleware('guest');

Route::get('/register', function () {
    return view('Content.register');
})->middleware('guest');

// Route::get('/dashboard-kategori', function () {
//     return view('content.dashboard-kategori');
// });

Route::post('/post-register', [RegisterController::class, 'store']);
Route::get('/dashboard-edit-produk/{id}', [ProdukController::class, 'edit']); //select data
Route::put('/dashboard-produk/{id}', [ProdukController::class, 'update']); //update data
Route::delete('/dashboard-delete-produk/{id}', [ProdukController::class, 'delete']);

Route::get('/dashboard-edit-kategori/{id}', [KategoriController::class, 'edit']); //select data
Route::put('/dashboard-kategori/{id}', [KategoriController::class, 'update']); //update data
Route::delete('/dashboard-delete-kategori/{id}', [KategoriController::class, 'delete']);

Route::post('/post-login', [AuthController::class, 'postLogin']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard-home', function () {
        return view('Content.dashboard-home'); 
    });
});

Route::group(['middleware' => ['auth', 'rolecek:user,admin']], function (){
    Route::get('/dashboard-produk', [ProdukController::class, 'index']);
});

Route::group(['middleware' => ['auth', 'rolecek:user,admin']], function (){
    Route::get('/dashboard-kategori', [KategoriController::class, 'index']);
});

Route::group(['middleware' => ['auth', 'rolecek:admin']], function (){
    Route::get('/dashboard-tambah-produk', [ProdukController::class, 'create']);
    Route::post('/dashboard-tambah-produk', [ProdukController::class,'store']);
});

Route::group(['middleware' => ['auth', 'rolecek:admin']], function (){
    Route::get('/dashboard-tambah-kategori', [KategoriController::class, 'create']);
    Route::post('/dashboard-tambah-kategori', [KategoriController::class,'store']);
});

//print produk
Route::get('print-produk', [ProdukController::class, 'print']);

//print kategori
Route::get('print-produk', [KategoriController::class, 'print']);