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
Route::get('/UPACARA HARI PAHLAWAN 10 N0VEMBER 2020 - TUGU PAHLAWAN SURABAYA', function(){
    return view('.Explore/UPACARA HARI PAHLAWAN 10 N0VEMBER 2020 - TUGU PAHLAWAN SURABAYA');
});
Route::get('/UPACARA PERINGATAN HARI SUMPAH PEMUDA KE-92 DI GEDUNG NEGARA GRAHADI JAWA TIMUR 28 OKTOBER 2020', function(){
    return view('.Explore/UPACARA PERINGATAN HARI SUMPAH PEMUDA KE-92 DI GEDUNG NEGARA GRAHADI JAWA TIMUR 28 OKTOBER 2020');
});
Route::get('/HUT JAWA TIMUR KE-75 12 OKTOBER 2020, GEDUNG NEGARA GRAHADI SURABAYA', function(){
    return view('.Explore/HUT JAWA TIMUR KE-75 12 OKTOBER 2020, GEDUNG NEGARA GRAHADI SURABAYA');
});
Route::get('/Talenta Milenial Job Center di era New Normal 13 Oktober 2020', function(){
    return view('.Explore/Talenta Milenial Job Center di era New Normal 13 Oktober 2020');
});
Route::get('/KOPILABORASI SAMBANG PESANTREN - POMOSDA NGANJUK 9 OKTOBER 2020', function(){
    return view('.Explore/KOPILABORASI SAMBANG PESANTREN - POMOSDA NGANJUK 9 OKTOBER 2020');
});
Route::get('/Launching Jawa Timur Belanja Online (JATIM BEJO), SI MASTER dan SI LAYAR', function(){
    return view('.Explore/Launching Jawa Timur Belanja Online (JATIM BEJO), SI MASTER dan SI LAYAR');
});
Route::get('/LIVE STREAMING UPACARA PERINGATAN HUT KE-75 KEMERDEKAAN RI, GEDUNG NEGARA GRAHADI', function(){
    return view('.Explore/LIVE STREAMING UPACARA PERINGATAN HUT KE-75 KEMERDEKAAN RI, GEDUNG NEGARA GRAHADI');
});
Route::get('/LIVE STREAMING UPACARA HARI KESAKTIAN PANCASILA 1 OKTOBER 2020', function(){
    return view('.Explore/LIVE STREAMING UPACARA HARI KESAKTIAN PANCASILA 1 OKTOBER 2020');
});
Route::get('/KHOTMIL QURAN KUBRO 2020 KALI NUZULUL QURAN ONLINE', function(){
    return view('.Explore/KHOTMIL QURAN KUBRO 2020 KALI NUZULUL QURAN ONLINE');
});
// admin
Route::get('/admin', function(){
    return view('admin.admin');
});