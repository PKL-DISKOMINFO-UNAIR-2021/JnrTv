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
Route::get('/ISTIGHOTSAH-KUBRO-ONLINE-DALAM-MENGHADAPI-WABAH-COVID-19', function(){
    return view('.youtube-video/ISTIGHOTSAH-KUBRO-ONLINE-DALAM-MENGHADAPI-WABAH-COVID-19');
});
Route::get('/LIVE-STREAMING-UPACARA-HARI-KESAKTIAN-PANCASILA-1-OKTOBER-2020', function(){
    return view('.youtube-video/LIVE-STREAMING-UPACARA-HARI-KESAKTIAN-PANCASILA-1-OKTOBER-2020');
});
Route::get('/VAKSIN AMAN DAN HALAL PROVINSI JAWA TIMUR', function(){
    return view('.new-release/VAKSIN AMAN DAN HALAL PROVINSI JAWA TIMUR');
});
Route::get('/DOA BERSAMA AKHIR TAHUN 2020 & MENYONGSONG JATIM BANGKIT TAHUN 2021', function(){
    return view('.new-release/DOA BERSAMA AKHIR TAHUN 2020 & MENYONGSONG JATIM BANGKIT TAHUN 2021');
});
Route::get('/PERINGATAN HARI IBU KE-92 dan HUT DHARMA WANITA PERSATUAN KE-21 TH.2020', function(){
    return view('.new-release/PERINGATAN HARI IBU KE-92 dan HUT DHARMA WANITA PERSATUAN KE-21 TH.2020');
});
Route::get('/EAST JAVA TOURISM AWARD 2020', function(){
    return view('.new-release/EAST JAVA TOURISM AWARD 2020');
});
Route::get('/GRAND FINAL 3D COMPETITION 2020', function(){
    return view('.new-release/GRAND FINAL 3D COMPETITION 2020');
});
<<<<<<< HEAD
Route::get('/ISTIGHOTSAH KUBRO ONLINE (TRIAL)', function(){
    return view('.youtube-video/ISTIGHOTSAH KUBRO ONLINE (TRIAL)');
});
Route::get('/UPACARA PERINGATAN HARI SUMPAH PEMUDA KE-92 DI GEDUNG NEGARA GRAHADI JAWA TIMUR 28 OKTOBER 2020', function(){
    return view('.youtube-video/UPACARA PERINGATAN HARI SUMPAH PEMUDA KE-92 DI GEDUNG NEGARA GRAHADI JAWA TIMUR 28 OKTOBER 2020');
});
=======
>>>>>>> daa56ae485cc7ed691f4b002be8cf88c61fd6d76
