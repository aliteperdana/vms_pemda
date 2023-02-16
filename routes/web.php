<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::middleware('otorisasi')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/checkdb', [HomeController::class, 'checkDb']);
    Route::get('/getdata', [HomeController::class, 'getData'])->name('getdata');
    Route::get('/detail/{id}',[HomeController::class, 'detail'])->name('detail');
    Route::post('/cari',[HomeController::class, 'cari'])->name('cari');
});

Route::get('/login',[UserController::class, 'login'])->name('login');
Route::post('/login',[UserController::class, 'checkLogin'])->name('check_login');
Route::get('/logout',[UserController::class, 'logout'])->name('logout');
