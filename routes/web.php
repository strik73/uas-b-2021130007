<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
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

Route::get('/', AppController::class)->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('items', ItemController::class);

Route::get('/order', [OrderController::class,'order'])->name('order');
Route::post('/order', [OrderController::class, 'createOrder'])->name('createOrder');
Route::get('/detail/{order}', [OrderController::class,'detailOrder'])->name('detail');
