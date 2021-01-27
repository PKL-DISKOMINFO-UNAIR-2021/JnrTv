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
      <link rel="stylesheet" href="/css/about.css">
    <!--------->
    <title>About</title>
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
                 <li class="nav-item"> <a class="nav-link" href="/channel">CHANNEL</a></li>
        <li class="active">
            <a class="nav-link" href="/about">ABOUT</a>
            </li>
        </ul>
        </div>

        <!-- label -->
    <section class="label">
        <div class="container">
            <p>Home / About</p>
        </div>
    </section>
        
    <!-- about -->
    <section class="about">
        <div class="container">
            <h3>Jatim TV Information</h3>
            <p>Indonesia tak tersusun dari batas peta, tapi gerak dan peran kaum muda.
                Karena itulah JnrTv ada. Menjadi ruang kerja dan karya anak bangsa. 
                Menyigi berbagai nama dan peristiwa, sembari memberi makna pada segala cerita yang berharga.
            </p>
            <p> Jatim Tv mengajak Anda menyelami ragam suguhan melalui program-program perbincangan, reportase, 
            kemasan dokumenter, opini dan ruang interaksi, juga mengelola komunitas, 
            aktivasi dan event online dan offline melalui kanal digital <strong>jnrtv.jatimprov.go.id </strong>
            Sebab di masa sekarang jejak digital tampil mengemuka. Setiap mereka yang aktif menebar karya, 
            energi positif mudah menular dan semakin menggelora.</p>
            <p>Semoga apa yang tersaji di JnrTv ikut memberi warna dan membentuk wajah dan kepribadian negeri</p>
            <p>Salam dari kami,</p>
            <p><strong>Kominfo Jatim</strong></p>
            <hr>
            <div class="alamat">
                <h3>Alamat Kantor</h3>
                <p>Kantor Dinas Komunikasi dan Informatika Pemerintah Provinsi Jawa Timur</p>
                <p>Jl. A. Yani 242 - 244, Surabaya. </p>
                <p>Telp (031) 8294608,</p>
                <p>Fax (031)8294517</p>
                <hr>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.1562243060525!2d112.72702661414924!3d-7.33634617419466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb9723c3ce97%3A0x6292e930823b42c3!2sKOMINFO%20JATIM!5e0!3m2!1sid!2sid!4v1611726660142!5m2!1sid!2sid" 
                    width="100%" height="300" frameborder="0" style="border:0;" 
                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>
        
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