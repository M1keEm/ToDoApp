<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\toDoListController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/saveItemRoute', [toDoListController::class, 'saveItem'])->name('saveItem');
