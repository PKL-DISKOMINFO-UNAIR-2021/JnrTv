<?php

function get_curl ($url){

    $curl = curl_init() ;
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    
    return json_decode($result, true);
}

#KEY NYA BANYAK SAMPAI BAWAH
$urlvideo = 'https://www.googleapis.com/youtube/v3/search?part=snippet&key=AIzaSyASg5H9-aCZli13Ya86cXli9vICianX7DY&channelId=UCEe1ees-scoEkTQv3he9PJw&maxResults=100&order=relevance';
$result = get_curl($urlvideo);
#THUMBNAIL CARD DAN JUDUL
$judulitem1 = $result['items'][0]['snippet']['title'];
$thumbnailitem1 = $result['items'][0]['snippet']['thumbnails']['medium']['url'];

$judulitem2 = $result['items'][1]['snippet']['title'];
$thumbnailitem2 = $result['items'][1]['snippet']['thumbnails']['medium']['url'];

$judulitem3 = $result['items'][2]['snippet']['title'];
$thumbnailitem3 = $result['items'][2]['snippet']['thumbnails']['medium']['url'];

$judulitem4 = $result['items'][3]['snippet']['title'];
$thumbnailitem4 = $result['items'][3]['snippet']['thumbnails']['medium']['url'];

$judulitem5 = $result['items'][4]['snippet']['title'];
$thumbnailitem5 = $result['items'][4]['snippet']['thumbnails']['medium']['url'];

$judulitem6 = $result['items'][5]['snippet']['title'];
$thumbnailitem6 = $result['items'][5]['snippet']['thumbnails']['medium']['url'];

?>

@extends('layout/master')
@section('linkcss')
<link rel="stylesheet" href="/css/explore.css">
    <link rel="stylesheet" href="/css/Style.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/lightslider.css">
    @endsection
    @section('title','explore')
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
    <!--Bannerr--> 
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="img/relevance.jpg" alt="First slide">
            </div>
            </div>
            
        </div>
        </div>

          <!--explore content---------------------------->
    <div class="movies-heading">
        <h2>RELEVANCE VIDEO</h2>
    </div>
    <section id="movies-list">
        <!--box-1------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src=<?= $thumbnailitem1; ?>>
            </div>
            <!--text--------->
            <a href="/relevance-item1">
            <?= $judulitem1; ?>
            </a>
        </div>
         <!--box-2------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src=<?= $thumbnailitem2; ?>>
            </div>
            <!--text--------->
            <a href="/relevance-item2">
            <?= $judulitem2; ?>
            </a>
        </div>
         <!--box-3------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src=<?= $thumbnailitem3; ?>>
            </div>
            <!--text--------->
            <a href="/relevance-item3">
            <?= $judulitem3; ?>
            </a>
        </div>
         <!--box-4------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src=<?= $thumbnailitem4; ?>>
            </div>
            <!--text--------->
            <a href="/relevance-item4">
            <?= $judulitem4; ?>
            </a>
        </div>
         <!--box-5------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src=<?= $thumbnailitem5; ?>>
            </div>
            <!--text--------->
            <a href="/relevance-item5">
            <?= $judulitem5; ?>
            </a>
        </div>
         <!--box-6------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src=<?= $thumbnailitem6; ?>>
            </div>
            <!--text--------->
            <a href="/relevance-item6">
            <?= $judulitem6; ?>
            </a>
        </div>
        
        
    </section>
@endsection