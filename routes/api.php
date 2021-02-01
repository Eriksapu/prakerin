<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\PostsController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('provinsi',[ApiController::class, 'provinsi']);
Route::get('provinsi/{id}',[ApiController::class, 'provinsixkota']);


Route::get('/posts',[ApiController::class, 'index']);
Route::post('/posts',[ApiController::class, 'store']);
Route::get('/posts/{id}',[ApiController::class, 'show']);
Route::put('/posts/update/{id}',[ApiController::class, 'update']);
Route::delete('/posts/{id}',[ApiController::class, 'destroy']);