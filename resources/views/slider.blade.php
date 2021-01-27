<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Personal Website</title>
    <link rel="stylesheet" href="/css/slider.css">
    <link rel="stylesheet" href="/css/lightslider.css">
    <!----js link----->
    <script type="text/javascript" src="/js/JQuery3.3.1.js"></script> 
    <script type="text/javascript" src="/js/lightslider.js"></script> 
	
</head>
<body>
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
    
</body>
</html>