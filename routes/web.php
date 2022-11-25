<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\DosenController;
use App\Http\Controllers\Backend\BarangController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\HomeController;

Route::prefix('users')->group(function(){
    Route::get('/view', [UserController::class, 'UserView'])->name('user.view');
    Route::get('/add', [UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/store', [UserController::class, 'UserStore'])->name('users.store');
    Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');
});

Route::prefix('barang')->group(function(){
    Route::get('/view', [BarangController::class, 'BarangView'])->name('barang.view');
    Route::get('/add', [BarangController::class, 'BarangAdd'])->name('barang.add');
    Route::post('/store', [BarangController::class, 'BarangStore'])->name('barang.store');
    Route::get('/edit/{id}', [BarangController::class, 'BarangEdit'])->name('barang.edit');
    Route::post('/update/{id}', [BarangController::class, 'BarangUpdate'])->name('barang.update');
    Route::get('/delete/{id}', [BarangController::class, 'BarangDelete'])->name('barang.delete');
});

Route::prefix('dosen')->group(function(){
    Route::get('/view', [DosenController::class, 'DosenView'])->name('dosen.view');
    Route::get('/add', [DosenController::class, 'DosenAdd'])->name('dosen.add');
    Route::post('/store', [DosenController::class, 'DosenStore'])->name('dosen.store');
    Route::get('/edit/{id}', [DosenController::class, 'DosenEdit'])->name('dosen.edit');
    Route::post('/update/{id}', [DosenController::class, 'DosenUpdate'])->name('dosen.update');
    Route::get('/delete/{id}', [DosenController::class, 'DosenDelete'])->name('dosen.delete');
});