<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClubController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
//clubs
Route::apiResource('/clubs', ClubController::class);
Route::post('/draw', [ClubController::class, 'draw']);