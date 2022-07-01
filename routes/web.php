<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/boxing', function () {
    return view('boxing');
})->name('boxing');
Route::get('/tennis', function () {
    return view('tennis');
})->name('tennis');
Route::get('/budy', function () {
    return view('budy');
})->name('body');
Auth::routes([
    'login' => true,
    'register' => true,
    'verify' => false,
    'reset' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
