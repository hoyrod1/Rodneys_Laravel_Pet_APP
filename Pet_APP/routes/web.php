<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatsController;
use App\Http\Controllers\DogsController;

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

Route::get('/', function () { return view('index'); });
Route::get('/cats', [CatsController::class, 'index'])->name('cats.index');
Route::get('/dogs', [DogsController::class, 'index'])->name('dogs.index');
