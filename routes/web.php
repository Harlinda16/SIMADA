<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pasiencontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/lihatpasien', [pasiencontroller::class, 'index']);