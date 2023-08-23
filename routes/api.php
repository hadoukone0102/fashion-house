<?php

use App\Http\Controllers\FashionHouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('mon_test', [FashionHouse::class,'ListCouturier']);
Route::get('Couturier/{id}',[FashionHouse::class,'GetCouturier']);
Route::post('/createCouturier',[FashionHouse::class,'CreateCouturier']);
Route::put('update/{$id}',[FashionHouse::class,'Update']);
Route::delete('delete{$id}',[FashionHouse::class,'delete']);