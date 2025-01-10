<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\toDoListController;

Route::get('/', [toDoListController::class, 'index']);

Route::post('/saveItemRoute', [toDoListController::class, 'saveItem'])->name('saveItem');

Route::post('/markCompleteRoute/{id}', [toDoListController::class, 'markComplete'])->name('markComplete');
