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
    return view('home');
});
Route::get('/test2', function () {
    return view('test');
});
Route::get('/coba', function () {
    return view('home');
});
Route::get('/test', function(){
    return view('carousell');
});
Route::get('/coba1', function(){
    return view('gridview');
});
Route::get('/coba2', function(){
    return view('explore');
});
<<<<<<< Updated upstream
Route::get('/about', function(){
    return view('about');
<<<<<<< HEAD
});
Route::get('/newrelease', function(){
    return view('newrelease');
=======
=======
Route::get('/coba3', function(){
    return view('testapi');
>>>>>>> Stashed changes
>>>>>>> 5dc73f3c5a6f9ab49c87edb9e96fd754dd6c81eb
});