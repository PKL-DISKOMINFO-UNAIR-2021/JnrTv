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
               <img src="img/s-1.jpg"/>
           </div>
               </li>
            <!--box-2--------------------------->
            <li class="item-b">
                <!--showcase-box------------------->
               <div class="showcase-box">
                   <img src="img/s-2.jpg"/>
               </div>
                   </li>
                <!--box-3--------------------------->
            <li class="item-c">
                <!--showcase-box------------------->
               <div class="showcase-box">
                   <img src="img/s-3.jpg"/>
               </div>
                   </li>
                <!--box-4--------------------------->
            <li class="item-d">
                <!--showcase-box------------------->
               <div class="showcase-box">
                   <img src="img/s-4.jpg"/>
               </div>
                   </li>
                   <!--box-5--------------------------->
            <li class="item-e">
                <!--showcase-box------------------->
               <div class="showcase-box">
                   <img src="img/s-5.png"/>
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
                        <img src="img/m-1.jpg">
                    </div>
                    <!--text---------->
                    <div class="latest-b-text">
                        <strong>Kin 2018</strong>
                        <p>Action Movie</p>
                    </div>
                </div>
            </li>
    <!--slide-box-2------------------>
    <li class="item-b">
        <div class="latest-box">
            <!--img-------->
            <div class="latest-b-img">
                <img src="img/m-2.jpg">
            </div>
            <!--text---------->
            <div class="latest-b-text">
                <strong>Kin 2018</strong>
                <p>Action Movie</p>
            </div>
        </div>
    </li>
    <!--slide-box-3------------------>
    <li class="item-c">
        <div class="latest-box">
            <!--img-------->
            <div class="latest-b-img">
                <img src="img/m-3.jpg">
            </div>
            <!--text---------->
            <div class="latest-b-text">
                <strong>Kin 2018</strong>
                <p>Action Movie</p>
            </div>
        </div>
    </li>
    <!--slide-box-4------------------>
    <li class="item-d">
        <div class="latest-box">
            <!--img-------->
            <div class="latest-b-img">
                <img src="img/m-4.jpg">
            </div>
            <!--text---------->
            <div class="latest-b-text">
                <strong>Kin 2018</strong>
                <p>Action Movie</p>
            </div>
        </div>
    </li>
    <!--slide-box-5------------------>
    <li class="item-e">
        <div class="latest-box">
            <!--img-------->
            <div class="latest-b-img">
                <img src="img/m-5.jpg">
            </div>
            <!--text---------->
            <div class="latest-b-text">
                <strong>Kin 2018</strong>
                <p>Action Movie</p>
            </div>
        </div>
    </li>
    <!--slide-box-6------------------>
    <li class="item-f">
        <div class="latest-box">
            <!--img-------->
            <div class="latest-b-img">
                <img src="img/m-6.jpg">
            </div>
            <!--text---------->
            <div class="latest-b-text">
                <strong>Kin 2018</strong>
                <p>Action Movie</p>
            </div>
        </div>
    </li>
    <!--slide-box-7------------------>
    <li class="item-g">
        <div class="latest-box">
            <!--img-------->
            <div class="latest-b-img">
                <img src="img/m-7.jpeg">
            </div>
            <!--text---------->
            <div class="latest-b-text">
                <strong>Kin 2018</strong>
                <p>Action Movie</p>
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
                <div class="quality">HDRip</div>
                <img src="img/l-1.jpg">
            </div>
            <!--text--------->
            <a href="#">
                Tin (2018) Full Movie[In English] With English Subtitles | HDRip 1080p HD
            </a>
        </div>
         <!--box-2------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">HDRip</div>
                <img src="img/l-2.jpg">
            </div>
            <!--text--------->
            <a href="#">
                Tin (2018) Full Movie[In English] With English Subtitles | HDRip 1080p HD
            </a>
        </div>
         <!--box-3------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">HDRip</div>
                <img src="img/l-3.jpg">
            </div>
            <!--text--------->
            <a href="#">
                Tin (2018) Full Movie[In English] With English Subtitles | HDRip 1080p HD
            </a>
        </div>
         <!--box-4------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">HDRip</div>
                <img src="img/l-4.jpg">
            </div>
            <!--text--------->
            <a href="#">
                Tin (2018) Full Movie[In English] With English Subtitles | HDRip 1080p HD
            </a>
        </div>
         <!--box-5------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">HDRip</div>
                <img src="img/l-5.jpg">
            </div>
            <!--text--------->
            <a href="#">
                Tin (2018) Full Movie[In English] With English Subtitles | HDRip 1080p HD
            </a>
        </div>
         <!--box-6------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">HDRip</div>
                <img src="img/l-6.jpg">
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
                <div class="quality">HDRip</div>
                <img src="img/l-7.jpg">
            </div>
            <!--text--------->
            <a href="#">
                Tin (2018) Full Movie[In English] With English Subtitles | HDRip 1080p HD
            </a>
        </div>
         <!--box-8------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">HDRip</div>
                <img src="img/l-8.jpg">
            </div>
            <!--text--------->
            <a href="#">
                Tin (2018) Full Movie[In English] With English Subtitles | HDRip 1080p HD
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