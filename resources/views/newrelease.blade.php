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
                <img src="img/VAKSIN AMAN DAN HALAL PROVINSI JAWA TIMUR.jpg">
            </div>
            <!--text--------->
            <a href="/VAKSIN AMAN DAN HALAL PROVINSI JAWA TIMUR">
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
            <a href="/DOA BERSAMA AKHIR TAHUN 2020 & MENYONGSONG JATIM BANGKIT TAHUN 2021">
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
            <a href="/PERINGATAN HARI IBU KE-92 dan HUT DHARMA WANITA PERSATUAN KE-21 TH 2020">
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
            <a href="/EAST JAVA TOURISM AWARD 2020">
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
            <a href="/GRAND FINAL 3D COMPETITION 2020">
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
            <a href="/PEMBUKAAN OPOP EXPO 2020">
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
            <a href="/HARI KESETIAKAWANAN SOSIAL NASIONAL PROVINSI JAWA TIMUR 12 DESEMBER 2020">
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
            <a href="/ERINGATAN HARI DISABILITAS INTERNATIONAL 2020">
            PERINGATAN HARI DISABILITAS INTERNATIONAL 2020-DINAS SOSIAL PROVINSI JAWA TIMUR 
            </a>
        </div>
        
    </section>
@endsection