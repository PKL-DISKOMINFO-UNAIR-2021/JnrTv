
<?php

function get_curl ($url){

    $curl = curl_init() ;
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    
    return json_decode($result, true);
}

$result = get_curl('https://www.googleapis.com/youtube/v3/channels?key=AIzaSyBIXfUwTaH32vqMXYr-4ZUNa3YRMnxEPaE&id=UCEe1ees-scoEkTQv3he9PJw&part=snippet,statistics');
$youtubeprofilepict = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelname = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

//videdo
$urlvideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyBIXfUwTaH32vqMXYr-4ZUNa3YRMnxEPaE&channelId=UCEe1ees-scoEkTQv3he9PJw&maxResults=5&part=snippet&order=date';
$result = get_curl($urlvideo);

$latestvideo = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$judul = $result['items'][0]['snippet']['title'];

//recommedation based highest viewcount video
$urlrecom = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyBIXfUwTaH32vqMXYr-4ZUNa3YRMnxEPaE&channelId=UCEe1ees-scoEkTQv3he9PJw&maxResults=5&part=snippet&order=viewCount';
$result = get_curl($urlrecom);

$recom = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$judulrecom = $result['items'][0]['snippet']['title'];

$recom1 = $result['items'][1]['snippet']['thumbnails']['medium']['url'];
$judulrecom1 = $result['items'][1]['snippet']['title'];

$recom2 = $result['items'][2]['snippet']['thumbnails']['medium']['url'];
$judulrecom2 = $result['items'][2]['snippet']['title'];

$recom3 = $result['items'][3]['snippet']['thumbnails']['medium']['url'];
$judulrecom3 = $result['items'][3]['snippet']['title'];

$recom4 = $result['items'][4]['id']['videoId'];
$judulrecom4 = $result['items'][4]['snippet']['title'];
$desc = $result['items'][4]['snippet']['description'];

?>
@extends('layout/master')
@section('linkcss')
<link rel="stylesheet" href="/css/viewvid.css">
@endsection
@section('title','video')
@section('nav')
<div class="nav-items">
        <li><a href="/">HOME</a></li>
        <li><a href="/explore">EXPLORE</a></li>
        <li><a href="/newrelease">NEW RELEASE</a></li>
        <li><a href="/about">ABOUT</a></li>
        <hr>
        <li><a class="fas" href="#"><i class="fas fa-bell mr-3" data-toggle="tooltip" title="notifications"></i></a></li>
        <li ><a class="signin" href="#">SIGN IN</a></li>
      </div>
@endsection
@section('isi')

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="feature-img">
                    <iframe src="https://youtube.com/embed/<?= $recom4; ?>?rel=0" allowfullscreen width="100%"></iframe>
                    <h2> <?= $judulrecom4; ?> </h2>
                    <div class= "akun-profile">
                        <img src= <?= $youtubeprofilepict; ?>>
                        <h2> <span class="font-weight-bold"> <?= $channelname; ?></span>
                        <br> <?= $subscriber;  ?> Subcriber </h2>
                    </div>
                    <p> <?= $desc; ?> </p>
                </div>
            </div>


            <div class="col">
                <h1>Recommendation</h1>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src=<?= $recom; ?>>
                    </div>
                    <a href = "/ISTIGHOTSAH-KUBRO-ONLINE-DALAM-MENGHADAPI-WABAH-COVID-19"><p> <?= $judulrecom; ?> </p></a>                </div>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src=<?= $recom1; ?>>
                    </div>
                    <a href="/LIVE-STREAMING-UPACARA-HARI-KESAKTIAN-PANCASILA-1-OKTOBER-2020"><p> <?= $judulrecom1; ?> </p></a>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src=<?= $recom2; ?>>
                    </div>
                    <a href="/DOA BERSAMA AKHIR TAHUN 2020 & MENYONGSONG JATIM BANGKIT TAHUN 2021"> <p> <?= $judulrecom2; ?> </p></a>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src=<?= $recom3; ?>>
                    </div>
                    <a href= "/ISTIGHOTSAH KUBRO ONLINE (TRIAL)"> <p> <?= $judulrecom3; ?> </p> </a>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src=<?= $latestvideo; ?>>
                    </div>
                    <a href= "/VAKSIN AMAN DAN HALAL PROVINSI JAWA TIMUR"><p> <?= $judul; ?> </p></a>
                </div>
            </div>
        </div>
    </div>
@endsection