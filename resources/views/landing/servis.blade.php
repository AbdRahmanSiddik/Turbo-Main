<?php $title = 'Servis'; ?>

@extends('layout.template_landing')

@section('content')
  <!-- Banner Here -->
  <section class="banner__section breadcumnd__banner bannerbg">
    <!--Mask-->
    <div class="banner__bgmask">
      <img src="{{ asset('landing') }}/assets/img/elements/box-element.png" alt="mask">
    </div>
    <!--Mask-->
    <!--Container-->
    <div class="container">
      <div class="breadcumnd__wrapper">
        <div class="row g-4  justify-content-between align-items-end">
          <!--col-->
          <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-8">
            <div class="breadcumnd__content">
              <h1 class="title">
                Services
              </h1>
              <ul class="breadcumnd__list">
                <li>
                  <a href="{{ route('home') }}">
                    Home
                  </a>
                </li>
                <li>
                <li>
                  <span class="icon">
                    <i class="material-symbols-outlined">
                      chevron_right
                    </i>
                  </span>
                </li>
                <li class="sucess">
                  Services
                </li>
              </ul>
            </div>
          </div>
          <!--col-->
          <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-8">
            <div class="breadcumnd__thumb">
              <img src="{{ asset('landing') }}/assets/img/banner/breadcumnd.png" alt="bread">
            </div>
          </div>
          <!--col-->
        </div>
        <!--ai text-->
        <div class="bread__ai">
          <img src="{{ asset('landing') }}/assets/img/elements/t-element.png" alt="img">
        </div>
        <!--ai text-->
      </div>
    </div>
    <!--Container-->
  </section>
  <!-- Banner End -->

  <!-- Service Here -->
  <section class="service__section bg__white pt-120 pb-120">
    <!--container-->
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="include__boxes include__grid__boxes">
          <div class="row g-4">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="inclue__box">
                <div class="icnos">
                  <img src="{{ asset('landing') }}/assets/img/feature/robotic.svg" alt="icon">
                </div>
                <div class="content">
                  <h4>
                    <a href="service-details.html">
                      Dasar Pemrograman Web
                    </a>
                  </h4>
                  <p>
                    Memahami dasar-dasar HTML, CSS, dan JavaScript sebagai fondasi utama web development.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="inclue__box include__box__grid1">
                <div class="icnos">
                  <img src="{{ asset('landing') }}/assets/img/feature/machine.svg" alt="icon">
                </div>
                <div class="content">
                  <h4>
                    <a href="service-details.html">
                      PHP Native
                    </a>
                  </h4>
                  <p>
                    Belajar PHP tanpa framework untuk memahami konsep dasar pemrograman backend secara menyeluruh.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="inclue__box">
                <div class="icnos">
                  <img src="{{ asset('landing') }}/assets/img/feature/robotic.svg" alt="icon">
                </div>
                <div class="content">
                  <h4>
                    <a href="service-details.html">
                      Pengembangan Web PHP
                    </a>
                  </h4>
                  <p>
                    Kami mengajarkan pengembangan web menggunakan PHP dari dasar hingga tingkat lanjut.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="inclue__box include__box__grid1">
                <div class="icnos">
                  <img src="{{ asset('landing') }}/assets/img/feature/machine.svg" alt="icon">
                </div>
                <div class="content">
                  <h4>
                    <a href="service-details.html">
                      Framework Laravel
                    </a>
                  </h4>
                  <p>
                    Belajar dan menguasai Laravel, framework PHP modern untuk membangun aplikasi web yang powerful.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="inclue__box include__box__grid2">
                <div class="icnos">
                  <img src="{{ asset('landing') }}/assets/img/feature/virtual.svg" alt="icon">
                </div>
                <div class="content">
                  <h4>
                    <a href="service-details.html">
                      Database & Manajemen Data
                    </a>
                  </h4>
                  <p>
                    Memahami pengelolaan database dengan MySQL dan teknik optimasi data untuk performa terbaik.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="inclue__box include__box__grid3">
                <div class="icnos">
                  <img src="{{ asset('landing') }}/assets/img/feature/cloud-icon.png" alt="icon">
                </div>
                <div class="content">
                  <h4>
                    <a href="service-details.html">
                      API Development
                    </a>
                  </h4>
                  <p>
                    Membuat dan mengelola RESTful API untuk menghubungkan aplikasi web dengan berbagai layanan.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--container-->
  </section>
  <!-- Service End -->

  <!-- Feature Here -->
  <section class="feature__work__section bg__white pt-120 pb-120">
    <!--container-->
    <div class="container">
      <!--Section header-->
      <div class="section__header section__center pb__60">
        <h2>
          Proses Pembelajaran Kami
        </h2>
        <p>
          Di Turbo Main Community, kami menerapkan metode pembelajaran bertahap dari dasar hingga mahir, dengan pendekatan
          praktik langsung.
        </p>
      </div>
      <!--Section header-->
      <div class="row g-5 justify-content-between align-items-center">
        <!--col grid-->
        <div class="col-md-6 col-xl-3">
          <div class="feature__component__work feature__work__align">
            <div class="feature__work__items">
              <div class="content">
                <h5>
                  Pemahaman Dasar
                </h5>
                <p>
                  Memulai dengan konsep dasar pemrograman web menggunakan HTML, CSS, dan JavaScript.
                </p>
              </div>
              <div class="icon">
                <img src="{{ asset('landing') }}/assets/img/svg-icon/brain.svg" alt="icon">
              </div>
            </div>
            <div class="feature__work__items">
              <div class="content">
                <h5>
                  Pemrograman PHP Native
                </h5>
                <p>
                  Mengembangkan aplikasi berbasis PHP tanpa framework untuk memahami fundamental PHP secara mendalam.
                </p>
              </div>
              <div class="icon">
                <img src="{{ asset('landing') }}/assets/img/svg-icon/prosesing.svg" alt="icon">
              </div>
            </div>
          </div>
        </div>
        <!--col grid-->
        <div class="col-10 order-sm-3 order-xl-2 col-xl-5">
          <div class="feature__work__thumb">
            <img src="{{ asset('landing') }}/assets/img/feature/work-feature.png" alt="feature">
          </div>
        </div>
        <!--col grid-->
        <div class="col-md-6 order-sm-2 col-xl-3">
          <div class="feature__component__work">
            <div class="feature__work__items2">
              <div class="icon">
                <img src="{{ asset('landing') }}/assets/img/svg-icon/stored.svg" alt="icon">
              </div>
              <div class="content">
                <h5>
                  Framework Laravel
                </h5>
                <p>
                  Mempelajari framework Laravel untuk membangun aplikasi berbasis MVC dengan efisien.
                </p>
              </div>
            </div>
            <div class="feature__work__items2">
              <div class="icon">
                <img src="{{ asset('landing') }}/assets/img/svg-icon/solution.svg" alt="icon">
              </div>
              <div class="content">
                <h5>
                  Pengelolaan Database
                </h5>
                <p>
                  Memahami dan mengelola database menggunakan MySQL serta integrasi dengan aplikasi web.
                </p>
              </div>
            </div>
            <div class="feature__work__items2">
              <div class="icon">
                <img src="{{ asset('landing') }}/assets/img/feature/cloud-icon.png" alt="icon">
              </div>
              <div class="content">
                <h5>
                  API Development
                </h5>
                <p>
                  Mengembangkan API menggunakan Laravel dan memahami konsep RESTful API untuk integrasi layanan.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!--col grid-->
      </div>
    </div>
    <!--container-->
    <!--elements-->
    <div class="work__element1">
      <img src="{{ asset('landing') }}/assets/img/banner/devided-element2.png" alt="img">
    </div>
    <div class="work__lockyello">
      <img src="{{ asset('landing') }}/assets/img/banner/devided-lockyello.png" alt="img">
    </div>
    <div class="work__blump">
      <img src="{{ asset('landing') }}/assets/img/banner/round-devided.png" alt="img">
    </div>
    <div class="work__blump2">
      <img src="{{ asset('landing') }}/assets/img/banner/round-devided.png" alt="img">
    </div>
    <!--elements-->
  </section>
  <!-- Feature End -->
@endsection
