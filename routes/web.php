<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all-user',[UserController::class, 'getAllUsers']);
Route::get('/register',[UserController::class, 'getCustomerForm'])->name('register');
Route::post('/register',[UserController::class, 'createUserRoute'])->name('register-customer');

// Route::get('/', function () {
//     return view('welcome');
// });
