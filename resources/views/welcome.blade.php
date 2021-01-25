<!DOCTYPE html>
    <head>
     <title> HOTEL </title>
    </head>

  </html>
<body>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        body {
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
        .navbar {
          width: 100%;
          background-color: #555;
          overflow: auto;
        }
        .navbar a {
          float: left;
          padding: 12px;
          color: white;
          text-decoration: none;
          font-size: 17px;
        }
        .navbar a:hover {
          background-color: #000;
        }
        .fa-instagram {
          color: white;
        }
        .active {
          background-color: #4CAF50;
        }   
        </style>
    </head>
        
    <div class="navbar">
      <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a> 
      <a href="/Admin"><i class="fa fa-fw fa-user"></i> Admin</a> 
      <a href="/coba"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
      <a href="#" class="fa fa-instagram"> farisfsydn</a>
    </div>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}
        
        /* Slideshow container */
        .slideshow-container {
          max-width: 70px
          margin: auto;
        }
        
        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
          background-color: rgba(0,0,0,0.8);
        }
        
        /* Caption text */
        .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
        }
        
        /* The dots/bullets/indicators */
        .dot {
          cursor: pointer;
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }
        
        .active, .dot:hover {
          background-color: #717171;
        }
        
        /* Fading animation */
        .fade {
          -webkit-animation-name: fade;
          -webkit-animation-duration: 1.5s;
          animation-name: fade;
          animation-duration: 1.5s;
        }
        
        @-webkit-keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        @keyframes fade {
          from {opacity: .4} 
          to {opacity: 1}
        }
        
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .prev, .next,.text {font-size: 11px}
        }
        </style>
        </head>
        <body>
        
        <div class="slideshow-container">
        
        <div class="mySlides fade">
          <img src="{{ ('img/hotel1.jpg ') }}" style="width:1520px; height:500px">
          <div class="text">Caption Text</div>
        </div>
        
        <div class="mySlides fade">
          <img src="{{ ('img/hotel.jpg ') }}" style="width:1520px; height:500px">
          <div class="text">Caption Two</div>
        </div>
        
        <div class="mySlides fade">
          <img src="{{ ('img/hotel3.jpg ') }}" style="width:1520px; height:500px">
          <div class="text">Caption Three</div>
        </div>
        
        <div style="text-align:center">
          <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
          <button class="next" onclick="plusSlides(1)">&#10095;</button>
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
        </div>
        
        <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
        </script>
        </body>
    
  <div>
    <body style="background-color:white;"></body>
    <br>
    <br>
    <br>
    <h1 style="text-align:center; color:#717171; font-family:Segoe UI">About Us</h1>
    <p style="text-align:center; color:#717171; font-family:Segoe UI; font-size: 120%" > Kami menyediakan layanan booking hotel termurah <br> kita juga telah bekerja sama dengan banyak hotel berkualitas <br> dari seluruh dunia </p>
  </div>
  <style>
.button {
  background-color: black;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left: 680px;
  cursor: pointer;
}
</style>
  <div class="button-center">
  <a class="button" href="/login" >Booking Hotel</a>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
<p> &copy; BasahProduction </p>
</body>

</html>