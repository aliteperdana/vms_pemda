<?php

use Illuminate\Http\Request;
use App\Http\Middleware\ApisToken;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware([ApisToken::class])->group(function(){
    Route::get('test', [ApiController::class, 'index']);
    Route::post('bentuk_usaha', [ApiController::class, 'bentuk_usaha']);
    Route::post('ijin_usaha', [ApiController::class, 'ijin_usaha']);
    Route::post('kabupaten', [ApiController::class, 'kabupaten']);
    Route::post('kontrak', [ApiController::class, 'kontrak']);
    Route::post('lelang_seleksi', [ApiController::class, 'lelang_seleksi']);
    Route::post('pemilik', [ApiController::class, 'pemilik']);
    Route::post('pengalaman', [ApiController::class, 'pengalaman']);
    Route::post('pengurus', [ApiController::class, 'pengurus']);
    Route::post('peralatan', [ApiController::class, 'peralatan']);
    Route::post('propinsi', [ApiController::class, 'propinsi']);
    Route::post('rekanan', [ApiController::class, 'rekanan']);
    Route::post('satuan_kerja', [ApiController::class, 'satuan_kerja']);
    Route::post('staf_ahli', [ApiController::class, 'staf_ahli']);
    Route::post('check_process/{id}', [ApiController::class, 'check_process']);

});
