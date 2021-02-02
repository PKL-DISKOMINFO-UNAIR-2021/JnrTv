
<?php

function get_curl ($url){

    $curl = curl_init() ;
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    
    return json_decode($result, true);
}

$result = get_curl('https://www.googleapis.com/youtube/v3/channels?key=AIzaSyCSy4GQvyGWZOa0sDXxDUye6JMIl_f2VZQ&id=UCEe1ees-scoEkTQv3he9PJw&part=snippet,statistics');
$youtubeprofilepict = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelname = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];
//latest video
$urlvideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyBj_nuoEMPsKH-_Kc9hGpgIlxJE5jDX0yA&channelId=UCEe1ees-scoEkTQv3he9PJw&maxResults=5&part=snippet&order=date';
$result = get_curl($urlvideo);

$latestvideo = $result['items'][0]['id']['videoId'];
$judul = $result['items'][0]['snippet']['title'];
$desc = $result['items'][0]['snippet']['description'];


?>@extends('layout/master')
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
                    <iframe src="https://youtube.com/embed/<?= $latestvideo; ?>?rel=0" allowfullscreen width="100%"></iframe>
                    <h2> <?= $judul; ?> </h2>
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
                        <img src="/img/pic2.png">
                    </div>
                    <p>Title <br> bawahe title </p>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src="/img/pic3.png">
                    </div>
                    <p>Title <br> bawahe title </p>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src="/img/pic4.png">
                    </div>
                    <p>Title <br> bawahe title </p>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src="/img/pic3.png">
                    </div>
                    <p>Title <br> bawahe title </p>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src="/img/pic2.png">
                    </div>
                    <p>Title <br> bawahe title </p>
                </div>
            </div>
        </div>
    </div>
@endsection