<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LlantaController;
use Illuminate\Support\Facades\URL;

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


Route::get('/', [LlantaController::class, 'index'])->name('llanta.index');




Route::get('/create', LlantaController::class . '@create')->name('create');
Route::get('/store', LlantaController::class .'@store')->name('llanta.store');
// // returns a page that shows a full post
// Route::get('/{llanta}', LlantaController::class .'@show')->name('posts.show');
// // returns the form for editing a post
Route::get('/edit/{llanta}/edit', LlantaController::class .'@edit')->name('llanta.edit');
Route::put('/update/{llanta}', LlantaController::class .'@update')->name('llanta.update');
Route::delete('/delete/{llanta}', LlantaController::class .'@destroy')->name('llanta.destroy');
