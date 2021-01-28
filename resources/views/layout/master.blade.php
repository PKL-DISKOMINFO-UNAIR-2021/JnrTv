<!DOCTYPE html>
<html lang="en">
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ asset('/fontawesome-free-5.12.1-web/css/all.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/Bootstrap/Bootstrap/css/all.min.css') }}">
<link rel="stylesheet" href="/css/home.css">
<link rel="stylesheet" href="/css/footer.css">

<script type="text/javascript" src="/js/JQuery3.3.1.js"></script> 
<script type="text/javascript" src="/js/lightslider.js"></script>
<!-- font -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">

@yield('linkcss')
<link rel="stylesheet" href="/css/lightslider.css">


<title>@yield('title')</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light  fixed-top shadow-sm p-3 mb-5 bg-white">
        <img class="logo" src="img/logo.png" href="/">
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
    
    @yield('nav2')
    
    @yield('isi')

    <footer class="footer" >
        <div class="footer-left">
            <img src="img/logo.png" href="/">
            <div class="footer-links">
                <a href="#" class="link1">Home</a>
                <a href="">Explore</a>
                <a href="">New Release</a>
                <a href="">Channel</a>
                <a href="">About</a>
            </div>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Jl. A. Yani 242 - 244, Surabaya. </span></p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>(031) 8294608</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p> kominfo@jatimprov.go.id</p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-follow-us">
            <span>Follow Us</span>
            Please Follow us on our Social Media Profile in order to keep updated.
            </p>
            <div class="footer-social">
                <a href="http://kominfo.jatimprov.go.id/"><i class="fas fa-globe"></i></a>
                <a href="https://www.instagram.com/kominfojatim/"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCEe1ees-scoEkTQv3he9PJw"><i class="fab fa-youtube"></i></a>
                
            </div>
        </div>
    </footer>
    <div class="footer2">
        <p><span><i class="fas fa-copyright"></i>Powered by</span>PKL Sistem Informasi Unair 2021</p>

    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    </body>
    </html>