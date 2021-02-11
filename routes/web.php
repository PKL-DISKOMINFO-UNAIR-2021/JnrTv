<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;

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

Route::get('/', 'App\Http\Controllers\carouselController@index');

Route::get('/youtubegj', function(){
    return view('gridview');
});
Route::get('/home1', function(){
    return view('backend/home');
});


Route::get('/explore', function(){
    return view('explore');
});
// About

Route::get('/about','App\Http\Controllers\AboutController@index');
Route::get('/admin/about','App\Http\Controllers\EditAboutController@index');
Route::get('/admin/about/tambah','App\Http\Controllers\EditAboutController@tambah');
Route::post('/admin/about/store','App\Http\Controllers\EditAboutController@store');
Route::get('/admin/about/edit/{id}','App\Http\Controllers\EditAboutController@edit');
Route::post('/admin/about/update/{id}','App\Http\Controllers\EditAboutController@update');
Route::get('/admin/about/hapus/{id}','App\Http\Controllers\EditAboutController@hapus');

Route::get('/newrelease', function(){
    return view('newrelease');
});
Route::get('/coba3', function(){
    return view('testapi');
});
Route::get('/channel', function(){
    return view('channel');
});
Route::get('/nav', function(){
    return view('navbar');
});
Route::get('/viewvid', function(){
    return view('viewvideo');
});
Route::get('/logins', function(){
    return view('login');
});

Route::get('/relevance', function(){
    return view('relevance');
});
Route::get('/mostrating', function(){
    return view('mostrating');
});


Route::get('/Recomendation-Item1', function(){
    return view('.youtube-video/Recomendation-Item1');
});
Route::get('/Recomendation-Item2', function(){
    return view('.youtube-video/Recomendation-Item2');
});
Route::get('/newrelease-item', function(){
    return view('.new-release/newrelease-item');
});
Route::get('newrelease-item-1', function(){
    return view('.new-release/newrelease-item-1');
});
Route::get('/newrelease-item-2', function(){
    return view('.new-release/newrelease-item-2');
});
Route::get('/newrelease-item-3', function(){
    return view('.new-release/newrelease-item-3');
});
Route::get('/newrelease-item-4', function(){
    return view('.new-release/newrelease-item-4');
});
Route::get('/newrelease-item-5', function(){
    return view('.new-release/newrelease-item-5');
});
Route::get('/newrelease-item-6', function(){
    return view('.new-release/newrelease-item-6');
});
Route::get('/newrelease-item-7', function(){
    return view('.new-release/newrelease-item-7');
});
Route::get('/newrelease-item-8', function(){
    return view('.new-release/newrelease-item-8');
});
Route::get('/Recomendation-Item3', function(){
    return view('.youtube-video/Recomendation-Item3');
});
Route::get('/Recomendation-Item4', function(){
    return view('.youtube-video/Recomendation-Item4');
});
Route::get('/Recomendation-Item5', function(){
    return view('.youtube-video/Recomendation-Item5');
});

Route::get('auth/google', [SocialController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [SocialController::class, 'handleGoogleCallback']);
Route::view('login','login');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Explore-Item1', function(){
    return view('.Explore/Explore-Item1');
});
Route::get('/Explore-Item2', function(){
    return view('.Explore/Explore-Item2');
});
Route::get('/Explore-Item3', function(){
    return view('.Explore/Explore-Item3');
});
Route::get('/Explore-Item4', function(){
    return view('.Explore/Explore-Item4');
});
Route::get('/Explore-Item5', function(){
    return view('.Explore/Explore-Item5');
});
Route::get('/Explore-Item6', function(){
    return view('.Explore/Explore-Item6');
});
Route::get('/Explore-Item7', function(){
    return view('.Explore/Explore-Item7');
});
Route::get('/Explore-Item8', function(){
    return view('.Explore/Explore-Item8');
});
Route::get('/Explore-Item9', function(){
    return view('.Explore/Explore-Item9');
});
// admin
Route::get('/admin', function(){
    return view('admin.admin');
});

// PLAY LISTT  
// MOST RATING
Route::get('/mostrating-item1', function(){
    return view('.mostrating/mostrating-item1');
});
Route::get('/mostrating-item2', function(){
    return view('.mostrating/mostrating-item2');
});
Route::get('/mostrating-item3', function(){
    return view('.mostrating/mostrating-item3');
});
Route::get('/mostrating-item4', function(){
    return view('.mostrating/mostrating-item4');
});
Route::get('/mostrating-item5', function(){
    return view('.mostrating/mostrating-item5');
});
Route::get('/mostrating-item6', function(){
    return view('.mostrating/mostrating-item6');
});
//RELEVANCE
Route::get('/relevance-item1', function(){
    return view('.relevance/relevance-item1');
});
Route::get('/relevance-item2', function(){
    return view('.relevance/relevance-item2');
});
Route::get('/relevance-item3', function(){
    return view('.relevance/relevance-item3');
});
Route::get('/relevance-item4', function(){
    return view('.relevance/relevance-item4');
});
Route::get('/relevance-item5', function(){
    return view('.relevance/relevance-item5');
});
Route::get('/relevance-item6', function(){
    return view('.relevance/relevance-item6');
});
Route::get('/carouselimg','App\Http\Controllers\cimgController@upload');
Route::post('/carouselimg/proses','App\Http\Controllers\cimgController@proses_upload');
Route::get('/carouselimg/hapus/{id}','App\Http\Controllers\cimgController@hapus');