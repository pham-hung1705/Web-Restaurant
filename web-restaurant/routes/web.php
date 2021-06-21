<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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
    return 'welcome';
});
// Route::get('login', function () {
//     return view('layouts.login');
// });
// Route::post('login', function () {
//     return view('layouts.login');
// });
// Route::get('singin', function () {
//     return view('layouts.singin');
// });
// Route::post('singin', function () {
//     return view('layouts.singin');
// });
Route::get('singin',[MyController::class,'getlogin']);
Route::post('singin',[MyController::class,'postlogiṇ']);


//validate

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
