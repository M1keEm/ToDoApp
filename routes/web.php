<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/saveItemRoute', function () {
    return view('welcome');
})->name('saveItem');
