<?php

use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\ProvinsiController;


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// //Api Provinsi
// Route::get('provinsi', [ProvinsiController::class,'index']);
// Route::post('provinsi', [ProvinsiController::class,'store']);
// Route::get('provinsi/{id}', [ProvinsiController::class,'show']);
// Route::delete('/provinsi/{id}', [ProvinsiController::class,'destroy']);

use App\Http\Controllers\Api\ApiController;
use App\Models\Kasus;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;
Route::get('/hari', [ApiController::class,'hari']);
Route::get('/indo', [ApiController::class,'indonesia']);
Route::get('/provinsi1/{id}', [ApiController::class,'provinsi']);
Route::get('/provinsi2', [ApiController::class,'provinsi1']);
Route::get('/kota', [ApiController::class,'kota']);
Route::get('/kecamatan', [ApiController::class,'kecamatan']);
Route::get('/desa', [ApiController::class,'desa']);