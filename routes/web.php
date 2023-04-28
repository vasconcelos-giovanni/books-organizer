<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/', function () {
    return view('books');
});

Route::get('/test', [BookController::class, 'test']);

Route::resource('books', BookController::class)
    ->except('show', 'destroy');
Route::post('books/destroy', [BookController::class, 'destroy'])
    ->name('books.destroy');
