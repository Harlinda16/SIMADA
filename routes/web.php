<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pasiencontroller;

Route::get('/', function () {
    return view('welcome');
});
