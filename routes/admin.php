<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;


Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
//Resource de Categorias
Route::resource('categories', CategoryController::class)->names('admin.categories');
//Crud para Tags
Route::get('tag', [TagController::class, 'index'])->name('admin.tags.index');
Route::get('tag/create', [TagController::class, 'create'])->name('admin.tags.create');
Route::post('tag', [TagController::class, 'store'])->name('admin.tags.store');
Route::get('tag/{tags}', [TagController::class, 'edit'])->name('admin.tags.edit');
Route::put('/tag/{employe}', [TagController::class, 'update'])->name('admin.tags.update');
Route::delete('tag/{tags}', [TagController::class, 'destroy'])->name('admin.tags.delete');





//Route::resource('tags', TagController::class)->names('admin.etiquetas');


