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
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" href="/css/lightslider.css">

    <!--------->
    <title>Home</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light  fixed-top shadow-sm p-3 mb-5 bg-white">
        <a class="navbar-brand text-black" href="# " >JatimTV</a>
        <ul>
            <li class="home"><a href="">HOME</a></li>
            <li class="explore"><a href="/coba2">EXPLORE</a></li>
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
                 <li class="nav-item"> <a class="nav-link" href="/channel">CHANNEL</a></li>
        <li class="nav-item">
            <a class="nav-link" href="/about">ABOUT</a>
            </li>
        </ul>
        </div>

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
                    <a class="btn btn-primary btn-lg" href="#" role="button">NEW RELEASE</a>
                </p>
            </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/slide2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h2> <span class="font-weight-bold">KUNJUNGI CHANNEL YOUTUBE KAMI</span></h5>
                <p>Streaming Informasi dan Video dari Youtube KOMINFO Prov. JAWA TIMUR</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">GO TO YOUTUBE</a>
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
        <h1 class="showcase-heading">New Release</h1>
        
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
        <h2 class="latest-heading">Latest Movies</h2>
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
        
        <!--slider script---------------------------->
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
                     <!-- ini akhir body modal -->
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">BACK</button>
                    <button type="submit" class="btn btn-primary">LOGIN</button>
                  </form>
                  </div>

                </div>
              </div>
            </div>

<!-- Modal -->

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