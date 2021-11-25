<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

//Resource de Categorias
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
Route::post('/admin/categories/create', [CategoryController::class, 'store'])->name('admin.categories.store');
Route::get('/admin/categories/edit/{category}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
Route::put('/admin/categories/edit/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
Route::delete('admin/categories/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
//Resource de Etiquetas
Route::get('/admin/tags', [TagController::class, 'index'])->name('admin.tags.index');


