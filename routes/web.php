<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\toDoListController;
use App\Http\Controllers\HomeController;

Route::get('/', [toDoListController::class, 'index']);

Route::post('/saveItemRoute', [toDoListController::class, 'saveItem'])->name('saveItem');

Route::post('/markCompleteRoute/{id}', [toDoListController::class, 'markComplete'])->name('markComplete');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
