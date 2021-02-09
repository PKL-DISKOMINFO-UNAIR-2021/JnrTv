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
Route::get('/explore', function(){
    return view('explore');
});
Route::get('/about', function(){
    return view('about');
});
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
Route::get('/ISTIGHOTSAH-KUBRO-ONLINE-DALAM-MENGHADAPI-WABAH-COVID-19', function(){
    return view('.youtube-video/ISTIGHOTSAH-KUBRO-ONLINE-DALAM-MENGHADAPI-WABAH-COVID-19');
});
Route::get('/LIVE-STREAMING-UPACARA-HARI-KESAKTIAN-PANCASILA-1-OKTOBER-2020', function(){
    return view('.youtube-video/LIVE-STREAMING-UPACARA-HARI-KESAKTIAN-PANCASILA-1-OKTOBER-2020');
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

Route::get('/ISTIGHOTSAH KUBRO ONLINE (TRIAL)', function(){
    return view('.youtube-video/ISTIGHOTSAH KUBRO ONLINE (TRIAL)');
});
Route::get('/UPACARA PERINGATAN HARI SUMPAH PEMUDA KE-92 DI GEDUNG NEGARA GRAHADI JAWA TIMUR 28 OKTOBER 2020', function(){
    return view('.youtube-video/UPACARA-PERINGATAN-HARI-SUMPAH-PEMUDA-KE-92-DI-GEDUNG-NEGARA-GRAHADI-JAWA-TIMUR-28-OKTOBER-2020');
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
Route::get('/carouselimg','App\Http\Controllers\cimgController@upload');
Route::post('/carouselimg/proses','App\Http\Controllers\cimgController@proses_upload');
Route::get('/carouselimg/hapus/{id}','App\Http\Controllers\cimgController@hapus');