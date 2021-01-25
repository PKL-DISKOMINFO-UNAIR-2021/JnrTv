<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="{{ asset('/fontawesome-free-5.12.1-web/css/all.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/Bootstrap/Bootstrap/css/all.min.css') }}">
      <link rel="stylesheet" href="/css/home.css">
      <title>Home</title>
    </head>
    <body>
        <div id="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <ul class="top-contact">
                            <li><a href=""><i class="fas fa-phone"></i>021-123-345-678</a></li>
                            <li><a href=""><i class="fas fa-envelope"></i>rumahsakit@rs.id</a></li>
                            <li><a href=""><i class="fas fa-ambulance"></i>(021)567428</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="sosmed">
                            <li><a href=""><i class="fab fa-facebook"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href=""><i class="fab fa-youtube"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <header>
            <div class="container">
               <div class="row">
                   <div class="col-md-8">
                        <div class="brand">
                            <img src="logo.png" alt="">
                            <div class="brand-name">
                                <h1>RUMAH SAKIT SEHAT</h1>
                                <h3>Melayani Dengan Sepenuh Jiwa</h3>
                            </div>
                        </div>
                   </div>
                   <div class="col-md-4 pembungkus-searchbox">
                        <div class="searchbox">
                            <form method="get">
                                <div class="input-group">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="cari"
                                        placeholder="Cari sesuatu..." aria-label="cari"
                                        aria-describedby="cari">
                                        <div class="input-group-append">
                                            <button class="btn btn-utama"id="cari">Cari</buttpm>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                   </div> <!--col-md-8-->
               </div> <!--row-->
            </div> <!--container-->
        </header>
<!--section menu-->
        <nav class="navbar navbar-expand-lg navbar-light bg-biru">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/profil/">Profil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Layanan </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/home/rawatjalan">Rawat Jalan</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/home/rawatinap">Rawat Inap</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/home/lab">Laboratorium</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Informasi </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/home/daftardokter">Daftar Dokter</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/home/konsultasi">Konsultasi Kesehatan</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/home/artikel">Artikel Kesehatan</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/contactus">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/home/login">Admin</a>
                        </li>
                    </ul>
                </div>

            </div> <!--container-->
        </nav>

        <section>
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                     <div class="carousel-item active">
                         <img src="rs.jpg" class="d-block w-100" alt="...">
                         <div class="carousel-caption d-none d-md-block">
                            <h1 class="display-4">Profil<br> <span class="font-weight-bold">RUMAH SAKIT SEHAT</span></h1>
                            <hr class="my-4">
                            <p class="lead">Siap Menyehatkan Anda</p>
                            <a class="btn btn-primary btn-lg font-weight-bold" href="/home/profil" role="button">KUNJUNGI</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="rs1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                             <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="rs2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                         </div>
                     </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-col">
                            <div class="brand">
                                <img src="logo.png" alt="logo">
                                <h2>RUMAH SAKIT SEHAT</h1>
                            </div>
                             <p class="tentang">
                            Taking care of your mental and physical health is just as important as any career move or responsibility
                             </p>
                             <ul class="sosmed">
                                 <li><a href=""><i class="fab fa-facebook"></i></a></li>
                                 <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                 <li><a href=""><i class="fab fa-instagram"></i></a></li>
                             </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-col">
                            <h3>Kontak Kami</h3>
                            <p class="alamat">Jl. Basuki Rahmad No.129, Surabaya, Jawa Timur, Indonesia</p>
                            <ul>
                                <li><i class="fas fa-phone mr-2"></i>Telp/Fax : 031-0917-0182</li>
                                <li><i class="fas fa-envelope mr-2"></i>Email : rumahsakit@rs.id</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-col">
                            <h3 class="nav-h3">Navigasi</h3>
                            <ul class="navigasi">
                                <li><a href=""> Profil</a></li> <br>
                                <li><a href=""> Visi dan Misi</a></li>
                                <li><a href=""> Konsultasi Kesehatan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="/node_modules/jquery/dist/jquery.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script type="text/javascript" src="/js/home.js"></script> 
    </body>
  </html>
