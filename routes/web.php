<?php

use App\Http\Controllers\Pages;
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

Route::get('/',  [Pages::class, 'index']);
Route::get('/contact', [Pages::class, 'contact']);
Route::get('/login', [Pages::class, 'login']);
Route::get('/menu', [Pages::class, 'menu']);
