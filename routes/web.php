<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', [TodoController::class, 'index']);
// Route::post('/', [TodoController::class, 'store']);

Route::resource('/', TodoController::class)->only([
    'index', 'store'
]);
Route::delete('/{todo}', [TodoController::class, 'destroy'])->name('destroy');
Route::put('/{todo}', [TodoController::class, 'update'])->name('update');
