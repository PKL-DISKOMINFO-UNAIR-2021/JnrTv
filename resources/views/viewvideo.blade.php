@extends('layout/master')
@section('linkcss')
<link rel="stylesheet" href="/css/viewvid.css">
@endsection
@section('title','video')
@section('nav')
<div class="nav-items">
        <li><a href="/">HOME</a></li>
        <li><a href="/explore">EXPLORE</a></li>
        <li><a href="/newrelease">NEW RELEASE</a></li>
        <li><a href="/about">ABOUT</a></li>
        <hr>
        <li><a class="fas" href="#"><i class="fas fa-bell mr-3" data-toggle="tooltip" title="notifications"></i></a></li>
        <li ><a class="signin" href="#">SIGN IN</a></li>
      </div>
@endsection
@section('isi')

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="feature-img">
                    <img src="/img/pic1.png" width="100%">
                    <p> Judul Video </p>
                    <p> Deskripsi Video </p>
                </div>
            </div>
            <div class="col">
                <h1>Recommendation</h1>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src="/img/pic2.png">
                    </div>
                    <p>Title <br> bawahe title </p>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src="/img/pic3.png">
                    </div>
                    <p>Title <br> bawahe title </p>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src="/img/pic4.png">
                    </div>
                    <p>Title <br> bawahe title </p>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src="/img/pic3.png">
                    </div>
                    <p>Title <br> bawahe title </p>
                </div>
                <div class="small-img-row">
                    <div class="small-img">
                        <img src="/img/pic2.png">
                    </div>
                    <p>Title <br> bawahe title </p>
                </div>
            </div>
        </div>
    </div>
@endsection