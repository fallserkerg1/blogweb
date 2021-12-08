<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/admin', [AdminController::class, 'index'])->Middleware('can:admin.index')->name('admin.index');

//Resource de Categorias
Route::get('/admin/categories', [CategoryController::class, 'index'])->Middleware('can:admin.categories.index')->name('admin.categories.index');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->Middleware('can:admin.categories.create')->name('admin.categories.create');
Route::post('/admin/categories/create', [CategoryController::class, 'store'])->name('admin.categories.store');
Route::get('/admin/categories/edit/{category}', [CategoryController::class, 'edit'])->Middleware('can:admin.categories.edit')->name('admin.categories.edit');
Route::put('/admin/categories/edit/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
Route::delete('admin/categories/{category}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');

//Resource de Etiquetas
Route::get('/admin/tags', [TagController::class, 'index'])->Middleware('can:admin.tags.index')->name('admin.tags.index');
Route::post('/admin/tags/create', [TagController::class, 'store'])->name('admin.tags.store');
Route::get('/admin/tags/edit/{tag}', [TagController::class, 'edit'])->Middleware('can:admin.tags.edit')->name('admin.tags.edit');
Route::put('/admin/tags/edit/{tag}', [TagController::class, 'update'])->name('admin.tags.update');
Route::delete('admin/tags/{tag}', [TagController::class, 'destroy'])->name('admin.tags.destroy');

//Resource de Posts
Route::get('/admin/posts', [PostController::class, 'index'])->Middleware('can:admin.posts.index')->name('admin.posts.index');
Route::get('/admin/posts/create', [PostController::class, 'create'])->Middleware('can:admin.posts.create')->name('admin.posts.create');
Route::post('/admin/posts/create', [PostController::class, 'store'])->name('admin.posts.store');
Route::get('/admin/posts/edit/{post}', [PostController::class, 'edit'])->name('admin.posts.edit');
Route::put('/admin/posts/edit/{post}', [PostController::class, 'update'])->name('admin.posts.update');
Route::delete('/admin/posts/{post}', [PostController::class, 'destroy'])->name('admin.posts.destroy');

//Resource de Users
Route::get('/admin/users', [UserController::class, 'index'])->Middleware('can:admin.users.index')->name('admin.users.index');
Route::get('/admin/users/create', [UserController::class, 'create'])->Middleware('can:admin.users.create')->name('admin.users.create');
Route::post('/admin/users/create', [UserController::class, 'store'])->name('admin.users.store');
Route::get('/admin/users/edit/{user}', [UserController::class, 'edit'])->Middleware('can:admin.users.edit')->name('admin.users.edit');
Route::put('/admin/users/edit/{user}', [UserController::class, 'update'])->name('admin.users.update');
Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');


