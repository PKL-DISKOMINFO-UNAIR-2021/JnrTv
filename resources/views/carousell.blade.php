<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Owl-carousel Cards Slider | CodingNepal</title> -->
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  </head>
  <body>
    <div class="slider owl-carousel">
      <div class="card">
        <div class="img">
        <img src="img/slide1.jpg" alt=""></div>
        <div class="content">
          <div class="title">
        Briana Tozour</div>
        <div class="sub-title">
          Graphic Designer</div>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
        <div class="btn">
          <button>Read more</button>
          </div>
      </div>
      </div>
      
      <div class="card">
              <div class="img">
      <img src="img/slide2.jpg" alt=""></div>
      <div class="content">
                <div class="title">
      Pricilla Preez</div>
      <div class="sub-title">
      Web Developer</div>
      <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
      <div class="btn">
                  <button>Read more</button>
                </div>
      </div>
      </div>
      <div class="card">
              <div class="img">
      <img src="img/slide3.jpg" alt=""></div>
      <div class="content">
                <div class="title">
      Eliana Maia</div>
      <div class="sub-title">
      App Developer</div>
      <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
      <div class="btn">
                  <button>Read more</button>
                </div>
      </div>
      </div>
      </div>
<script>
      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000, //2000ms = 2s;
        autoplayHoverPause: true,
      });
    </script>

  </body>
</html>

