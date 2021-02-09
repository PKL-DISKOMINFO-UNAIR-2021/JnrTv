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
Route::get('/VAKSIN AMAN DAN HALAL PROVINSI JAWA TIMUR', function(){
    return view('.new-release/VAKSIN AMAN DAN HALAL PROVINSI JAWA TIMUR');
});
Route::get('/DOA BERSAMA AKHIR TAHUN 2020 & MENYONGSONG JATIM BANGKIT TAHUN 2021', function(){
    return view('.new-release/DOA BERSAMA AKHIR TAHUN 2020 & MENYONGSONG JATIM BANGKIT TAHUN 2021');
});
Route::get('/PERINGATAN HARI IBU KE-92 dan HUT DHARMA WANITA PERSATUAN KE-21 TH 2020', function(){
    return view('.new-release/PERINGATAN HARI IBU KE-92 dan HUT DHARMA WANITA PERSATUAN KE-21 TH 2020');
});
Route::get('/EAST JAVA TOURISM AWARD 2020', function(){
    return view('.new-release/EAST JAVA TOURISM AWARD 2020');
});
Route::get('/GRAND FINAL 3D COMPETITION 2020', function(){
    return view('.new-release/GRAND FINAL 3D COMPETITION 2020');
});
Route::get('/ISTIGHOTSAH KUBRO ONLINE (TRIAL)', function(){
    return view('.youtube-video/ISTIGHOTSAH KUBRO ONLINE (TRIAL)');
});
Route::get('/UPACARA PERINGATAN HARI SUMPAH PEMUDA KE-92 DI GEDUNG NEGARA GRAHADI JAWA TIMUR 28 OKTOBER 2020', function(){
    return view('.youtube-video/UPACARA-PERINGATAN-HARI-SUMPAH-PEMUDA-KE-92-DI-GEDUNG-NEGARA-GRAHADI-JAWA-TIMUR-28-OKTOBER-2020');
});
Route::get('/PEMBUKAAN OPOP EXPO 2020', function(){
    return view('.new-release/PEMBUKAAN OPOP EXPO 2020');
});
Route::get('/HARI KESETIAKAWANAN SOSIAL NASIONAL PROVINSI JAWA TIMUR 12 DESEMBER 2020', function(){
    return view('.new-release/HARI KESETIAKAWANAN SOSIAL NASIONAL PROVINSI JAWA TIMUR 12 DESEMBER 2020');
});
Route::get('/PEMBUKAAN OPOP EXPO 2020', function(){
    return view('.new-release/PEMBUKAAN OPOP EXPO 2020');
});
Route::get('/HARI KESETIAKAWANAN SOSIAL NASIONAL PROVINSI JAWA TIMUR 12 DESEMBER 2020', function(){
    return view('.new-release/HARI KESETIAKAWANAN SOSIAL NASIONAL PROVINSI JAWA TIMUR 12 DESEMBER 2020');
});
Route::get('/RAPAT KERJA DAERAH 2020', function(){
    return view('.new-release/RAPAT KERJA DAERAH 2020');
});
Route::get('/PERINGATAN HARI DISABILITAS INTERNATIONAL 2020', function(){
    return view('.new-release/PERINGATAN HARI DISABILITAS INTERNATIONAL 2020');
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