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
// KEY NYA BANYAK SCROLL KEBAWAH
$urlvideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyASe-WTBIXs1XGo_RsDDLV4MOV9e3ldxr8&channelId=UCEe1ees-scoEkTQv3he9PJw&maxResults=10&part=snippet&order=date';
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

// Buat Explore bawah terakhir
$urlrecom = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyASe-WTBIXs1XGo_RsDDLV4MOV9e3ldxr8&channelId=UCEe1ees-scoEkTQv3he9PJw&maxResults=100&part=snippet&order=viewCount';
$result = get_curl($urlrecom);
$judulitem7 = $result['items'][10]['snippet']['title'];
$thumbnailitem7 = $result['items'][10]['snippet']['thumbnails']['medium']['url'];

$urlrecom = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyASe-WTBIXs1XGo_RsDDLV4MOV9e3ldxr8&channelId=UCEe1ees-scoEkTQv3he9PJw&maxResults=5&part=snippet&order=viewCount';
$result = get_curl($urlrecom);
$thumbnailitem8 = $result['items'][1]['snippet']['thumbnails']['medium']['url'];
$judulitem8 = $result['items'][1]['snippet']['title'];

$urlrecom = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyASe-WTBIXs1XGo_RsDDLV4MOV9e3ldxr8&channelId=UCEe1ees-scoEkTQv3he9PJw&maxResults=10&part=snippet&order=viewCount';
$result = get_curl($urlrecom);
$judulitem9 = $result['items'][5]['snippet']['title'];
$thumbnailitem9 = $result['items'][5]['snippet']['thumbnails']['medium']['url'];
?>

@extends('layout/master')
@section('linkcss')
<link rel="stylesheet" href="/css/lightslider.css">
@endsection
@section('title','home')
@section('nav')
<div class="nav-items">
        <li><a class="active"href="/">HOME</a></li>
        <li><a href="/explore">EXPLORE</a></li>
        <li><a href="/newrelease">NEW RELEASE</a></li>
        <li><a href="/about">ABOUT</a></li>
        <hr>
        <li><a class="fas" href="#"><i class="fas fa-bell mr-3" data-toggle="tooltip" title="notifications"></i></a></li>
        <li ><a class="signin" href="/logins">SIGN IN</a></li>
      </div>
@endsection
@section('isi')
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>

        <div class="carousel-inner">
            @foreach($gambar as $g)
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ $g->file}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h2> <span class="font-weight-bold">SELAMAT DATANG DI JATIM TV</span></h5>
                        <p>Streaming Informasi dan Video dari Dinas KOMINFO Prov. JAWA TIMUR</p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="/newrelease" role="button">NEW RELEASE</a>
                        </p>
                    </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slide2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2> <span class="font-weight-bold">KUNJUNGI CHANNEL YOUTUBE KAMI</span></h5>
                    <p>Streaming Informasi dan Video dari Youtube KOMINFO Prov. JAWA TIMUR</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="https://www.youtube.com/channel/UCEe1ees-scoEkTQv3he9PJw" role="button">GO TO YOUTUBE</a>
                    </p>
                </div>
            </div>
            @endforeach
            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>

<section id="main">
        <!--showcase----------------------->
        <!--heading------------->
        <a class="showcase-heading">NEW RELEASE</a>
        <a class="showcase-heading-kanan" href="/newrelease" style="float:right;">VIEW ALL</a>
        
        <ul id="autoWidth" class="cs-hidden">
        
        <!--box-1--------------------------->
        <li class="item-a">
            <!--showcase-box------------------->
           <div class="showcase-box">
               <a href="/newrelease-item"><img src="<?= $latestvideo; ?>"/></a>  
           </div>
               </li>
            <!--box-2--------------------------->
            <li class="item-b">
                <!--showcase-box------------------->
               <div class="showcase-box">
                   <a href="/newrelease-item-1"><img src="<?= $latestvideo1; ?>"/></a>
               </div>
                   </li>
                <!--box-3--------------------------->
            <li class="item-c">
                <!--showcase-box------------------->
               <div class="showcase-box">
                   <a href="/newrelease-item-2"><img src="<?= $latestvideo2; ?>"/></a>
               </div>
                   </li>
                <!--box-4--------------------------->
            <li class="item-d">
                <!--showcase-box------------------->
               <div class="showcase-box">
                   <a href="/newrelease-item-3"><img src="<?= $latestvideo3; ?>"/></a>
               </div>
                   </li>
                   <!--box-5--------------------------->
            <li class="item-e">
                <!--showcase-box------------------->
               <div class="showcase-box">
                   <a href="/newrelease-item-4"><img src="<?= $latestvideo4; ?>"/></a>
               </div>
                   </li>
          </ul>
        
    </section>
    <!--latest-movies---------------------->
    <section id="latest">
        <a class="latest-heading">CHANNEL</a>
        
        <!--slider------------------->
        <ul id="autoWidth2" class="cs-hidden">
            <!--slide-box-1------------------>
            <li class="item-a">
                <div class="latest-box">
                    <!--img-------->
                    <div class="latest-b-img">
                    <a href="/https://www.youtube.com/user/MediaCenterPemkotSby"> <img src="img/chn1.jpg"></a>
                    </div>
                    <!--text---------->
                    <div class="latest-b-text">
                        <strong>Dinas Komunikasi dan Informatika Kota Surabaya</strong>
                        <p>Youtube Channel</p>
                    </div>
                </div>
            </li>
    <!--slide-box-2------------------>
    <li class="item-b">
        <div class="latest-box">
            <!--img-------->
            <div class="latest-b-img">
            <a href="/https://www.youtube.com/channel/UC6673kwtPekbPTJgRsTSizQ"> <img src="img/chn2.jpg"></a>
            </div>
            <!--text---------->
            <div class="latest-b-text">
            <strong>Kementrian Komunikasi dan Informatika Republik Indonesia</strong>
                <p>Youtube Channel</p>
            </div>
        </div>
    </li>
    <!--slide-box-3------------------>
    <li class="item-c">
        <div class="latest-box">
            <!--img-------->
            <div class="latest-b-img">
            <a href="/https://www.youtube.com/channel/UCokJ8jyd48UOGYJJdr_Wyqw"><img src="img/chn3.jpg"></a>
            </div>
            <!--text---------->
            <div class="latest-b-text">
                <strong>Dinas Komunikasi dan Informatika Prov. Jawa Barat</strong>
                <p>Youtube Channel</p>
            </div>
        </div>
    </li>
    <!--slide-box-4------------------>
    <li class="item-d">
        <div class="latest-box">
            <!--img-------->
            <div class="latest-b-img">
               <a href="https://www.youtube.com/channel/UC5iqvpvcHBoxZlK9MCO36lg"> <img src="img/chn4.jpg"></a>
            </div>
            <!--text---------->
            <div class="latest-b-text">
                <strong>Dinas Komunikasi dan Informatika Prov. Jawa Tengah</strong>
                <p>Youtube Channel</p>
            </div>
        </div>
    </li>
    <!--slide-box-5------------------>
    <li class="item-e">
        <div class="latest-box">
            <!--img-------->
            <div class="latest-b-img">
                <a href="https://www.youtube.com/user/PemprovDKI"><img src="img/chn5.jpg"></a>
            </div>
            <!--text---------->
            <div class="latest-b-text">
                <strong>Dinas Komunikasi dan Informatika Kota DKI Jakarta</strong>
                <p>Youtube Channel</p>
            </div>
        </div>
    </li>
    <!--slide-box-6------------------>
    <li class="item-f">
        <div class="latest-box">
            <!--img-------->
            <div class="latest-b-img">
                <a href="https://www.youtube.com/channel/UCNfUw0R_8dIeMQQAYDDMihQ"><img src="img/chn6.jpg"></a>
            </div>
            <!--text---------->
            <div class="latest-b-text">
                <strong>Dinas Komunikasi dan Informatika DI Yogyakarta</strong>
                <p>Youtube Channel</p>
            </div>
        </div>
    </li>
          </ul>
    </section>
    <!--movies---------------------------->
    <section id="top">
    <a class="latest-heading">EXPLORE</a>
    <a class="showcase-heading-kanan" href="/explore" style="float:right;">VIEW ALL</a>
    </section>
    
    <section id="movies-list">
        <!--box-1------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src=<?= $thumbnailitem7; ?>>
            </div>
            <!--text--------->
            <a href="/Explore-Item7">
            <?= $judulitem7; ?>
            </a>
        </div>
         <!--box-2------------------------>
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
         <!--box-3------------------------>
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
    <script>
        $(document).ready(function() {
        $('#autoWidth,#autoWidth2').lightSlider({
            autoWidth:true,
            loop:true,
            onSliderLoad: function() {
                $('#autoWidth,#autoWidth2').removeClass('cS-hidden');
            } 
        });  
    });
    </script>

@endsection