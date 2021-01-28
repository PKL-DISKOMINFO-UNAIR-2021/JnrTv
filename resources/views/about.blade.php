@extends('layout/master')
@section('linkcss')
<link rel="stylesheet" href="/css/about.css">
@endsection
@section('title','about')
@section('nav2')
    <div class="nav2">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="/newrelease">NEW RELEASE</a></li>
                 <li class="nav-item"> <a class="nav-link" href="/channel">CHANNEL</a></li>
        <li class="active">
            <a class="nav-link" href="/about">ABOUT</a>
            </li>
        </ul>
        </div>
@endsection
@section('isi')
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
        
 @endsection