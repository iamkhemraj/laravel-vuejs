<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');



Route::get('/all-user',[UserController::class, 'getAllUsers']);
Route::post('/create-user',[UserController::class, 'createUserRoute'])->name('register-customer');