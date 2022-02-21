<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\TodoListController::class, 'index'])->name('todo.principal');

Route::get('create', [App\Http\Controllers\TodoListController::class, 'create'])->name('todo.create');

Route::post('store', [App\Http\Controllers\TodoListController::class, 'store'])->name('todo.store');

Route::post('delete',  [App\Http\Controllers\TodoListController::class, 'delete'])->name('todo.delete');

Route::post('show',  [App\Http\Controllers\TodoListController::class, 'show'])->name('todo.show');