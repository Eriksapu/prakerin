<?php

use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
use App\Models\Kasus;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;

//indo-rw
Route::get('/global', [ApiController::class,'global']);
Route::get('/hari', [ApiController::class,'hari']);
Route::get('/indo', [ApiController::class,'indonesia']);
Route::get('/provinsi1/{id}', [ApiController::class,'provinsi']);
Route::get('/provinsi', [ApiController::class,'provinsi1']);
Route::get('/kota', [ApiController::class,'kota']);
Route::get('/kota1/{id}', [ApiController::class,'kota1']);
Route::get('/kecamatan', [ApiController::class,'kecamatan']);
Route::get('/kecamatan1/{id}', [ApiController::class,'kecamatan1']);
Route::get('/desa', [ApiController::class,'desa']);
Route::get('/desa1/{id}', [ApiController::class,'desa1']);
Route::get('/rw', [ApiController::class,'rw']);
Route::get('/rw1/{id}', [ApiController::class,'rw1']);