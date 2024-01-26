<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Homecontroller;

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

Route::get('/', [Homecontroller::class, 'index']);
Route::get('/menu', [Homecontroller::class, 'index']);
Route::get('/kategori', [Homecontroller::class, 'index']);





