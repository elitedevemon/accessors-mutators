<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  $users = User::get();
  return view('welcome', compact('users'));
});

Route::controller(UserController::class)->group(function () {
  Route::post('info', 'store')->name('user.store');
});