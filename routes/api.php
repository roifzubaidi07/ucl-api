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
Route::get('/fixtures/{id}', [ClubController::class, 'fixtures']);
Route::post('/reset', [ClubController::class, 'reset']);
Route::post('/draw/opponents/{id}', [ClubController::class, 'draw_opponent']);