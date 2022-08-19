<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('todos')->group(function() {
    Route::get('/', [TodoController::class, 'index'])->name('todo.index');
    Route::get('/detail/{todo}', [TodoController::class, 'show'])->name('todo.show');
    Route::get('/create', [TodoController::class, 'create'])->name('todo.create');
    Route::post('/create', [TodoController::class, 'store'])->name('todo.store');
    Route::get('/edit/{todo}', [TodoController::class, 'edit'])->name('todo.edit');
    Route::put('/edit/{todo}', [TodoController::class, 'update'])->name('todo.update');
    Route::delete('/delete/{todo}', [TodoController::class, 'destroy'])->name('todo.delete');
});