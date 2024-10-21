<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UsersController::class);
Route::get('users/data', [UsersController::class, 'data'])->name('users.data');
