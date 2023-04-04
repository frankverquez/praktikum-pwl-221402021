<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;
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


//Route ::get('/daftar_mahasiswa', 'App\Http\Controllers\MahasiswaController@index');

Route::get('/daftar_mahasiswa', [MahasiswaController::class, 'index']);
//Route::post('/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);

//Route::match(['get', 'post'], '/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);

Route::view('detail_mahasiswa', 'detail_mahasiswa');
Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::get('/admin/postingan', [AdminController::class, 'show_postingan']);
Route::get('/admin/arsip', [AdminController::class, 'show_arsip']);
Route::get('/admin/customers', [AdminController::class, 'show_customers']);
Route::get('/admin/products', [AdminController::class, 'show_products']);
Route::get('/admin/suppliers', [AdminController::class, 'show_suppliers']);
Route::get('/admin/transaction', [AdminController::class, 'show_transaction']);
Route::get('/admin/reports', [AdminController::class, 'show_reports']);