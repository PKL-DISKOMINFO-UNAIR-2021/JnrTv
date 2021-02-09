<?php

function get_curl ($url){

    $curl = curl_init() ;
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    
    return json_decode($result, true);
}

//videdo
$urlvideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyCk1rkP_6ue8Wy8SItlTGNoffT6ajmL8aQ&channelId=UCEe1ees-scoEkTQv3he9PJw&maxResults=10&part=snippet&order=date';
$result = get_curl($urlvideo);

$latestvideo = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$judul = $result['items'][0]['snippet']['title'];

$latestvideo1 = $result['items'][1]['snippet']['thumbnails']['medium']['url'];
$judul1 = $result['items'][1]['snippet']['title'];

$latestvideo2 = $result['items'][2]['snippet']['thumbnails']['medium']['url'];
$judul2 = $result['items'][2]['snippet']['title'];

$latestvideo3 = $result['items'][3]['snippet']['thumbnails']['medium']['url'];
$judul3 = $result['items'][3]['snippet']['title'];

$latestvideo4 = $result['items'][4]['snippet']['thumbnails']['medium']['url'];
$judul4 = $result['items'][4]['snippet']['title'];

$latestvideo5 = $result['items'][5]['snippet']['thumbnails']['medium']['url'];
$judul5 = $result['items'][5]['snippet']['title'];

$latestvideo6 = $result['items'][6]['snippet']['thumbnails']['medium']['url'];
$judul6 = $result['items'][6]['snippet']['title'];

$latestvideo7 = $result['items'][7]['snippet']['thumbnails']['medium']['url'];
$judul7 = $result['items'][7]['snippet']['title'];

$latestvideo8 = $result['items'][8]['snippet']['thumbnails']['medium']['url'];
$judul8 = $result['items'][8]['snippet']['title'];

?>

@extends('layout/master')
@section('linkcss')
<link rel="stylesheet" href="/css/newrelease.css">
      @endsection
      @section('title','newrelease')
      @section('nav')
<div class="nav-items">
        <li><a href="/">HOME</a></li>
        <li><a href="/explore">EXPLORE</a></li>
        <li><a class="active"href="/newrelease">NEW RELEASE</a></li>
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
            <img class="d-block w-100" src="img/bannernewrelease.jpg" alt="First slide">
            </div>
            </div>
            
        </div>
        </div>
    
    <!--explore content---------------------------->
    <div class="movies-heading">
        <h2>NEW RELEASE</h2>
    </div>
    <section id="movies-list">
        <!--box-1------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="<?= $latestvideo; ?>">
            </div>
            <!--text--------->
            <a href="/newrelease-item">
            <?= $judul; ?>
            </a>
        </div>
         <!--box-2------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="<?= $latestvideo1; ?>">
            </div>
            <!--text--------->
            <a href="/newrelease-item-1">
            <?= $judul1; ?>
            </a>
        </div>
         <!--box-3------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="<?= $latestvideo2; ?>">
            </div>
            <!--text--------->
            <a href="/newrelease-item-2">
            <?= $judul2; ?>
            </a>
        </div>
         <!--box-4------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="<?= $latestvideo3; ?>">
            </div>
            <!--text--------->
            <a href="/newrelease-item-3">
            <?= $judul3; ?>
            </a>
        </div>
         <!--box-5------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="<?= $latestvideo4; ?>">
            </div>
            <!--text--------->
            <a href="/newrelease-item-4">
            <?= $judul4; ?>
            </a>
        </div>
         <!--box-6------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="<?= $latestvideo5; ?>">
            </div>
            <!--text--------->
            <a href="/newrelease-item-5">
            <?= $judul5; ?>
            </a>
        </div>
         <!--box-7------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="<?= $latestvideo6; ?>">
            </div>
            <!--text--------->
            <a href="/newrelease-item-6">
            <?= $judul6; ?>
            </a>
        </div>
         <!--box-8------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="<?= $latestvideo7; ?>">
            </div>
            <!--text--------->
            <a href="/newrelease-item-7">
            <?= $judul7; ?>
            </a>
        </div>
        <!--box-9------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="<?= $latestvideo8; ?>">
            </div>
            <!--text--------->
            <a href="/newrelease-item-8">
            <?= $judul8; ?>
            </a>
        </div>
        
    </section>
@endsection