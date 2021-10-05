<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
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

Route::get('/',[StoreController::class,'Homepage'])->name('homepage');
Route::get('/storepage',[StoreController::class,'Storepage'])->name('storepage');
Route::post('/store',[StoreController::class,'Store'])->name('store');
