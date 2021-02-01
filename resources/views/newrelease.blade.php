@extends('layout/master')
@section('linkcss')
<link rel="stylesheet" href="/css/newrelease.css">
      <link rel="stylesheet" href="/css/card.css">
      <link rel="stylesheet" href="/css/explore.css">
      <link rel="stylesheet" href="/css/about.css">
      <link rel="stylesheet" href="/css/lightslider.css">
      @endsection
      @section('title','newrelease')
      @section('nav2')
    <div class="nav2">
            <ul class="nav justify-content-center">
                <li class="active"><a class="nav-link" href="/newrelease">NEW RELEASE</a></li>
                 <li class="nav-item"> <a class="nav-link" href="/channel">CHANNEL</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">ABOUT</a></li>
        </ul>
        </div>
    @endsection
    @section('isi')
        <!-- label -->
    <section class="label">
        <div class="container">
            <p>Home / New Release</p>
        </div>
    </section>
    
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
                <img src="img/VAKSIN AMAN DAN HALAL PROVINSI JAWA TIMUR.jpg">
            </div>
            <!--text--------->
            <a href="#">
            VAKSIN AMAN DAN HALAL PROVINSI JAWA TIMUR
            </a>
        </div>
         <!--box-2------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="img/DOA BERSAMA AKHIR TAHUN 2020 & MENYONGSONG JATIM BANGKIT TAHUN 2021.jpg">
            </div>
            <!--text--------->
            <a href="#">
            DOA BERSAMA AKHIR TAHUN 2020 & MENYONGSONG JATIM BANGKIT TAHUN 2021
            </a>
        </div>
         <!--box-3------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="img/PERINGATAN HARI IBU KE-92 dan HUT DHARMA WANITA PERSATUAN KE-21 TH.2020.jpg">
            </div>
            <!--text--------->
            <a href="#">
            PERINGATAN HARI IBU KE-92 dan HUT DHARMA WANITA PERSATUAN KE-21 TH.2020
            </a>
        </div>
         <!--box-4------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="img/EAST JAVA TOURISM AWARD 2020.jpg">
            </div>
            <!--text--------->
            <a href="#">
            EAST JAVA TOURISM AWARD 2020
            </a>
        </div>
         <!--box-5------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="img/GRAND FINAL 3D COMPETITION 2020.jpg">
            </div>
            <!--text--------->
            <a href="#">
            GRAND FINAL 3D COMPETITION 2020
            </a>
        </div>
         <!--box-6------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="img/PEMBUKAAN OPOP EXPO 2020 PESANTREN BERDAYA MASYARAKAT SEJAHTERA.jpg">
            </div>
            <!--text--------->
            <a href="#">
            PEMBUKAAN OPOP EXPO 2020 PESANTREN BERDAYA MASYARAKAT SEJAHTERA
            </a>
        </div>
         <!--box-7------------------------>
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
         <!--box-8------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="img/RAPAT KERJA DAERAH 2020-LEMBAGA PENGEMBANGAN TILAWATIL QURAN ( LPTQ ) DI JAWA TIMUR.jpg">
            </div>
            <!--text--------->
            <a href="#">
            RAPAT KERJA DAERAH 2020-LEMBAGA PENGEMBANGAN TILAWATIL QURAN ( LPTQ ) DI JAWA TIMUR
            </a>
        </div>
        <!--box-9------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">Live Record</div>
                <img src="img/PERINGATAN HARI DISABILITAS INTERNATIONAL 2020-DINAS SOSIAL PROVINSI JAWA TIMUR .jpg">
            </div>
            <!--text--------->
            <a href="#">
            PERINGATAN HARI DISABILITAS INTERNATIONAL 2020-DINAS SOSIAL PROVINSI JAWA TIMUR 
            </a>
        </div>
        
    </section>
@endsection