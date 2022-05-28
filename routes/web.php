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

Route::post('list/store', [App\Http\Controllers\TodoListController::class, 'store'])->name('todo.store');

Route::post('list/delete',  [App\Http\Controllers\TodoListController::class, 'delete'])->name('todo.delete');

Route::get('/list/{id}',  [App\Http\Controllers\ItemController::class, 'show'])->name('todo.show');

//Item
Route::post('/item/store',  [App\Http\Controllers\ItemController::class, 'store'])->name('item.store');

Route::post('/item/delete',  [App\Http\Controllers\ItemController::class, 'delete'])->name('item.delete');