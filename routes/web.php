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

Route::get('/about', [Homecontroller::class, 'about']);

Route::get('/add', [Homecontroller::class, 'tambah']);

Route::post('/save', [Homecontroller::class, 'simpan']);

Route::get('/makanan', [Homecontroller::class, 'view_makanan']);

Route::get('/test_querybuilder', [Homecontroller::class, 'test_querybuilder']);

Route::get('/test_eloquent', [Homecontroller::class, 'test_eloquent']);




