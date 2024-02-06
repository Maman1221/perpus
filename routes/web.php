<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bukucontroller;

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
    return view('dashboard');
})->name('dashboard');

route::resource('buku',bukucontroller::class);
Route::put('buku/{id}', [bukucontroller::class,'bukucontroller@update']);


