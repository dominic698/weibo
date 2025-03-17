<?php

use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');
Route::get('/signup',[UsersController::class, 'create'])->name('signup');
Route::resource('/users', 'UsersController');
Route::get('login',[SessionsController::class, 'create'])->name('login');
Route::post('login',[SessionsController::class, 'store'])->name('login');
Route::get('logout',[SessionsController::class, 'destroy'])->name('logout');
