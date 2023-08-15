<?php

use App\Http\Controllers\Help;
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
Route::get('/', [Help::class, 'ayuda']); 
Route::get('/ayudaddt', [Help::class, 'ayudaddt']);
Route::get('/ayudaescuela', [Help::class, 'ayudaescuela']);
Route::get('/ayudabiblioteca', [Help::class, 'ayudabiblioteca']);