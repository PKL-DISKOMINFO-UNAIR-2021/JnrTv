@extends('layout/master')
@section('linkcss')
<link rel="stylesheet" href="/css/lightslider.css">
@endsection
@section('title','home')
@section('isi')
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="img/slide1.jpg" alt="First slide">
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
               <img src="img/VAKSIN AMAN DAN HALAL PROVINSI JAWA TIMUR.jpg"/>
           </div>
               </li>
            <!--box-2--------------------------->
            <li class="item-b">
                <!--showcase-box------------------->
               <div class="showcase-box">
                   <img src="img/DOA BERSAMA AKHIR TAHUN 2020 & MENYONGSONG JATIM BANGKIT TAHUN 2021.jpg"/>
               </div>
                   </li>
                <!--box-3--------------------------->
            <li class="item-c">
                <!--showcase-box------------------->
               <div class="showcase-box">
                   <img src="img/PERINGATAN HARI IBU KE-92 dan HUT DHARMA WANITA PERSATUAN KE-21 TH.2020.jpg"/>
               </div>
                   </li>
                <!--box-4--------------------------->
            <li class="item-d">
                <!--showcase-box------------------->
               <div class="showcase-box">
                   <img src="img/EAST JAVA TOURISM AWARD 2020.jpg"/>
               </div>
                   </li>
                   <!--box-5--------------------------->
            <li class="item-e">
                <!--showcase-box------------------->
               <div class="showcase-box">
                   <img src="img/GRAND FINAL 3D COMPETITION 2020.jpg"/>
               </div>
                   </li>
          </ul>
        
    </section>
    <!--latest-movies---------------------->
    <section id="latest">
        <a class="latest-heading">CHANNEL</a>
        <a class="showcase-heading-kanan" href="/channel" style="float:right;">VIEW ALL</a>
        <!--slider------------------->
        <ul id="autoWidth2" class="cs-hidden">
            <!--slide-box-1------------------>
            <li class="item-a">
                <div class="latest-box">
                    <!--img-------->
                    <div class="latest-b-img">
                        <img src="img/chn1.jpg">
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
                <img src="img/chn2.jpg">
            </div>
            <!--text---------->
            <div class="latest-b-text">
                <strong>Dinas Komunikasi dan Informatika Republik Indonesia</strong>
                <p>Youtube Channel</p>
            </div>
        </div>
    </li>
    <!--slide-box-3------------------>
    <li class="item-c">
        <div class="latest-box">
            <!--img-------->
            <div class="latest-b-img">
                <img src="img/chn3.jpg">
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
                <img src="img/chn4.jpg">
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
                <img src="img/chn5.jpg">
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
                <img src="img/chn6.jpg">
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
    <a class="showcase-heading-kanan" href="/channel" style="float:right;">VIEW ALL</a>
    </section>
    
    <section id="movies-list">
        <!--box-1------------------------>
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
         <!--box-2------------------------>
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
         <!--box-3------------------------>
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