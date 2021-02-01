
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
                <img src="img/UPACARA HARI PAHLAWAN 10 N0VEMBER 2020 - TUGU PAHLAWAN SURABAYA.jpg">
            </div>
            <!--text--------->
            <a href="#">
            UPACARA HARI PAHLAWAN 10 N0VEMBER 2020 - TUGU PAHLAWAN SURABAYA
            </a>
        </div>
         <!--box-2------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="img/UPACARA PERINGATAN HARI SUMPAH PEMUDA KE-92 DI GEDUNG NEGARA GRAHADI JAWA TIMUR 28 OKTOBER 2020.jpg">
            </div>
            <!--text--------->
            <a href="#">
            UPACARA PERINGATAN HARI SUMPAH PEMUDA KE-92 DI GEDUNG NEGARA GRAHADI JAWA TIMUR 28 OKTOBER 2020
            </a>
        </div>
         <!--box-3------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="img/HUT JAWA TIMUR KE-75 12 OKTOBER 2020, GEDUNG NEGARA GRAHADI SURABAYA.jpg">
            </div>
            <!--text--------->
            <a href="#">
            HUT JAWA TIMUR KE-75 12 OKTOBER 2020, GEDUNG NEGARA GRAHADI SURABAYA
            </a>
        </div>
         <!--box-4------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="img/Talenta Milenial Job Center di era New Normal 13 Oktober 2020.jpg">
            </div>
            <!--text--------->
            <a href="#">
            Talenta Milenial Job Center di era New Normal 13 Oktober 2020
            </a>
        </div>
         <!--box-5------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="img/KOPILABORASI SAMBANG PESANTREN - POMOSDA NGANJUK 9 OKTOBER 2020.jpg">
            </div>
            <!--text--------->
            <a href="#">
            KOPILABORASI SAMBANG PESANTREN - POMOSDA NGANJUK 9 OKTOBER 2020
            </a>
        </div>
         <!--box-6------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="img/SEMINAR ONLINE PENANGGULANGAN BENCANA Provinsi Jawa Timur Tahun 2020.jpg">
            </div>
            <!--text--------->
            <a href="#">
                Tin (2018) Full Movie[In English] With English Subtitles | HDRip 1080p HD
            </a>
        </div>
         <!--box-7------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="img/LIVE STREAMING UPACARA PERINGATAN HUT KE-75 KEMERDEKAAN RI, GEDUNG NEGARA GRAHADI.jpg">
            </div>
            <!--text--------->
            <a href="#">
            LIVE STREAMING UPACARA PERINGATAN HUT KE-75 KEMERDEKAAN RI, GEDUNG NEGARA GRAHADI
            </a>
        </div>
         <!--box-8------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="img/HARI KESETIAKAWANAN SOSIAL NASIONAL PROVINSI JAWA TIMUR 12 DESEMBER 2020.jpg">
            </div>
            <!--text--------->
            <a href="#">
            HARI KESETIAKAWANAN SOSIAL NASIONAL PROVINSI JAWA TIMUR 12 DESEMBER 2020
            </a>
        </div>
        <!--box-9------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="img/KOPILABORASI, GOTONG ROYONG LAWAN COVID 19.jpg">
            </div>
            <!--text--------->
            <a href="#">
            KOPILABORASI, GOTONG ROYONG LAWAN COVID 19
            </a>
        </div>
        
    </section>
@endsection