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
$urlvideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyCk1rkP_6ue8Wy8SItlTGNoffT6ajmL8aQ&channelId=UCEe1ees-scoEkTQv3he9PJw&maxResults=100&part=snippet&order=date';
$result = get_curl($urlvideo);
#THUMBNAIL CARD DAN JUDUL
$judulitem1 = $result['items'][37]['snippet']['title'];
$thumbnailitem1 = $result['items'][37]['snippet']['thumbnails']['medium']['url'];

$judulitem2 = $result['items'][40]['snippet']['title'];
$thumbnailitem2 = $result['items'][40]['snippet']['thumbnails']['medium']['url'];

$judulitem3 = $result['items'][45]['snippet']['title'];
$thumbnailitem3 = $result['items'][45]['snippet']['thumbnails']['medium']['url'];

$judulitem4 = $result['items'][44]['snippet']['title'];
$thumbnailitem4 = $result['items'][44]['snippet']['thumbnails']['medium']['url'];

$judulitem5 = $result['items'][46]['snippet']['title'];
$thumbnailitem5 = $result['items'][46]['snippet']['thumbnails']['medium']['url'];

$judulitem6 = $result['items'][34]['snippet']['title'];
$thumbnailitem6 = $result['items'][34]['snippet']['thumbnails']['medium']['url'];

$urlrecom = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyCk1rkP_6ue8Wy8SItlTGNoffT6ajmL8aQ&channelId=UCEe1ees-scoEkTQv3he9PJw&maxResults=100&part=snippet&order=viewCount';
$result = get_curl($urlrecom);
$judulitem7 = $result['items'][10]['snippet']['title'];
$thumbnailitem7 = $result['items'][10]['snippet']['thumbnails']['medium']['url'];

$urlrecom = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyCk1rkP_6ue8Wy8SItlTGNoffT6ajmL8aQ&channelId=UCEe1ees-scoEkTQv3he9PJw&maxResults=5&part=snippet&order=viewCount';
$result = get_curl($urlrecom);
$thumbnailitem8 = $result['items'][1]['snippet']['thumbnails']['medium']['url'];
$judulitem8 = $result['items'][1]['snippet']['title'];

$urlrecom = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyCk1rkP_6ue8Wy8SItlTGNoffT6ajmL8aQ&channelId=UCEe1ees-scoEkTQv3he9PJw&maxResults=10&part=snippet&order=viewCount';
$result = get_curl($urlrecom);
$judulitem9 = $result['items'][5]['snippet']['title'];
$thumbnailitem9 = $result['items'][5]['snippet']['thumbnails']['medium']['url'];
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
        <li><a class="active" href="/explore">EXPLORE</a></li>
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
            <img class="d-block w-100" src="img/bannerexplore.jpg" alt="First slide">
            </div>
            </div>
            
        </div>
        </div>

          <!--explore content---------------------------->
    <div class="movies-heading">
        <h2>Explore</h2>
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
            <a href="/Explore-Item1">
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
            <a href="/Explore-Item2">
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
            <a href="/Explore-Item3">
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
            <a href="/Explore-Item4">
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
            <a href="/Explore-Item5">
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
            <a href="/Explore-Item6">
            <?= $judulitem6; ?>
            </a>
        </div>
         <!--box-7------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="<?= $thumbnailitem7; ?>">
            </div>
            <!--text--------->
            <a href="/Explore-Item7">
            <?= $judulitem7; ?>
            </a>
        </div>
         <!--box-8------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src=<?= $thumbnailitem8; ?>>
            </div>
            <!--text--------->
            <a href="/Explore-Item8">
            <?= $judulitem8; ?>
            </a>
        </div>
        <!--box-9------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src=<?= $thumbnailitem9; ?>>
            </div>
            <!--text--------->
            <a href="/Explore-Item9">
            <?= $judulitem9; ?>
            </a>
        </div>
        
    </section>
@endsection