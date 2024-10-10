<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaOperatorController;
use App\Http\Controllers\BerandaWalimuridController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

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

Route::prefix('operator')->middleware(['auth','auth.operator'])->group(function(){
    //ini route khusus untuk operator
    Route::get('beranda', [BerandaOperatorController::class, 'index'])->name('operator.beranda');
    //Uer CRUD
    Route::resource('user', UserController::class);
});

Route::prefix('walimurid')->middleware(['auth','auth.walimurid'])->group(function(){
    //ini route khusus untuk wali murid
    Route::get('beranda', [BerandaWalimuridController::class, 'index'])->name('walimurid.beranda');
});

Route::get('logout', function(){
    Auth::logout();
    return redirect()->route('login');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->middleware('auth');
