
<?php

function get_curl ($url){

    $curl = curl_init() ;
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    
    return json_decode($result, true);
}

$result = get_curl('https://www.googleapis.com/youtube/v3/channels?key=AIzaSyCk1rkP_6ue8Wy8SItlTGNoffT6ajmL8aQ&id=UCEe1ees-scoEkTQv3he9PJw&part=snippet,statistics');
$youtubeprofilepict = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelname = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

//videdo
$urlvideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyCk1rkP_6ue8Wy8SItlTGNoffT6ajmL8aQ&channelId=UCEe1ees-scoEkTQv3he9PJw&maxResults=10&part=snippet&order=date';
$result = get_curl($urlvideo);

$latestvideo2 = $result['items'][7]['id']['videoId'];
$judul2 = $result['items'][7]['snippet']['title'];
$desc2 = $result['items'][7]['snippet']['description'];

//recommedation based highest viewcount video
$urlrecom = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyCk1rkP_6ue8Wy8SItlTGNoffT6ajmL8aQ&channelId=UCEe1ees-scoEkTQv3he9PJw&maxResults=10&part=snippet&order=viewCount';
$result = get_curl($urlrecom);

$recom = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$judulrecom = $result['items'][0]['snippet']['title'];

$recom1 = $result['items'][1]['snippet']['thumbnails']['medium']['url'];
$judulrecom1 = $result['items'][1]['snippet']['title'];

$recom2 = $result['items'][5]['snippet']['thumbnails']['medium']['url'];
$judulrecom2 = $result['items'][5]['snippet']['title'];

$recom3 = $result['items'][3]['snippet']['thumbnails']['medium']['url'];
$judulrecom3 = $result['items'][3]['snippet']['title'];

$recom4 = $result['items'][4]['snippet']['thumbnails']['medium']['url'];
$judulrecom4 = $result['items'][4]['snippet']['title'];


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
                    <iframe src="https://youtube.com/embed/<?= $latestvideo2; ?>?rel=0" allowfullscreen width="100%"></iframe>
                    <h2> <?= $judul2; ?> </h2>
                    <div class= "akun-profile">
                        <img src= <?= $youtubeprofilepict; ?>>
                        <h2> <span class="font-weight-bold"> <?= $channelname; ?></span>
                        <br> <?= $subscriber;  ?> Subcriber </h2>
                    </div>
                    <p> <?= $desc2; ?> </p>
                </div>
            </div>


            <div class="col">
                <h1>Recommendation</h1>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src=<?= $recom; ?>>
                    </div>
                    <a href="/Recomendation-Item1"><p> <?= $judulrecom; ?> </p></a>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src=<?= $recom1; ?>>
                    </div>
                    <a href="/Recomendation-Item2"><p> <?= $judulrecom1; ?> </p></a>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src=<?= $recom2; ?>>
                    </div>
                    <a href="/Recomendation-Item3"> <p> <?= $judulrecom2; ?> </p></a>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src=<?= $recom3; ?>>
                    </div>
                    <a href= "/Recomendation-Item4"> <p> <?= $judulrecom3; ?> </p> </a>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src=<?= $recom4; ?>>
                    </div>
                    <a href="/Recomendation-Item5"><p> <?= $judulrecom4; ?> </p></a>
                </div>
            </div>
        </div>
    </div>
@endsection