<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="{{ asset('/fontawesome-free-5.12.1-web/css/all.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/Bootstrap/Bootstrap/css/all.min.css') }}">
      <link rel="stylesheet" href="/css/home.css">
      <link rel="stylesheet" href="/css/channel.css">
      <link rel="stylesheet" href="/css/newrelease.css">
      <link rel="stylesheet" href="/css/card.css">
      <link rel="stylesheet" href="/css/about.css">
      <link rel="stylesheet" href="/css/lightslider.css">
    <!--------->
    <title>Channel</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light  fixed-top shadow-sm p-3 mb-5 bg-white">
        <a class="navbar-brand text-black" href="# " >JatimTV</a>
        <ul>
            <li class="home"><a href="/">HOME</a></li>
            <li class="explore"><a href="/explore">EXPLORE</a></li>
        </ul>
            <form class="form-inline my-2 my-lg-0 ml-auto">
            <div class="search">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </div>
            <button class="btn bg-dark text-white my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="icon ml-4">
            <h5>
                <i class="fas fa-bell mr-3" data-toggle="tooltip" title="notifications"></i> <!-- tooltip dibuat untuk memeberitahu makna icon -->
                <a href="" data-toggle="modal" data-target="#exampleModal">SIGN IN</a>
            </h5>
            </div>
        </div>
    </nav>
    <div class="nav2">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="/newrelease">NEW RELEASE</a></li>
                 <li class="active"> <a class="nav-link" href="/channel">CHANNEL</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">ABOUT</a></li>
        </ul>
        </div>

        <!-- label -->
    <section class="label">
        <div class="container">
            <p>Home / Channel</p>
        </div>
    </section>
    
    <!--Bannerr--> 
    <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="img/bannerchannel.jpg" alt="First slide">
            </div>
            </div>
            
        </div>
        </div>
    
    <!--explore content---------------------------->
    <div class="movies-heading">
        <h2>FEATURED CHANNEL</h2>
    </div>
    <section id="movies-list">
        <!--box-1------------------------>
        <div class="channel-box">
            <!--img------------>
            <div class="movies-img">
                <img src="img/kominfojabar.jpg">
            </div>
            <!--text--------->
            <a href="#">
                YouTube Channel Dinas Komunikasi dan Informatika Provinsi Jawa Barat
            </a>
        </div>
         <!--box-2------------------------>
         <div class="channel-box">
            <!--img------------>
            <div class="movies-img">
                <img src="img/kominfosby.jpg">
            </div>
            <!--text--------->
            <a href="#">
                YouTube Channel Dinas Komunikasi dan Informatika Kota Surabaya
            </a>
        </div>
         <!--box-3------------------------>
        <div class="channel-box">
            <!--img------------>
            <div class="movies-img">
                <img src="img/kominfojateng.jpg">
            </div>
            <!--text--------->
            <a href="#">
            YouTube Channel Dinas Komunikasi dan Informatika Provinsi Jawa Tengah
            </a>
        </div>
         <!--box-4------------------------>
         <div class="channel-box">
            <!--img------------>
            <div class="movies-img">
                <img src="img/kominfopusat.jpg">
            </div>
            <!--text--------->
            <a href="#">
                YouTube Channel Kementrian Komunikasi dan Informatika Republik Indonesia
            </a>
        </div>

    <!--footer------------------>
    <footer>
        <p>Going To Internet, Ltd Consumer Website</p>
        <p>Copyright 2020 - GoingToInternet</p>
    </footer>

    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">SIGN IN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
            <!-- ini body modal -->
            <form >
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email">EMAIL</label>
                <input type="email"  required="required" placeholder="Email" name="email" class="form-control form-control-sm" id="email">
            </div>
                    
            <div class="form-group">
                <label for="password">PASSWORD</label>
                <input type="password" required="required" placeholder="Password" name="password" class="form-control form-control-sm" id="password">
            </div>

            <div class="bawah">
                <a class="signup" href="">Sign Up</a>
                <a class="forgot" href="">Forgot Password</a>
            </div>
        </div>
    </div>
    <!-- ini akhir body modal -->  
    
        
    <!----- Java Script------>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="/node_modules/jquery/dist/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/home.js"></script>
    <script type="text/javascript" src="/js/JQuery3.3.1.js"></script> 
    <script type="text/javascript" src="/js/lightslider.js"></script>  
</body>
</html>