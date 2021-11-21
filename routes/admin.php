<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::resource('categories', CategoryController::class)->names('admin.categories');

