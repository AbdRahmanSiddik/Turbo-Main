<?php $title = 'Tentang Kami'; ?>

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
                Tentang Kami
              </h1>
              <ul class="breadcumnd__list">
                <li>
                  <a href="{{ route('home') }}">
                    Home
                  </a>
                </li>
                <li>
                  <span class="icon">
                    <i class="material-symbols-outlined">
                      chevron_right
                    </i>
                  </span>
                </li>
                <li class="sucess">
                  Tentang Kami
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

  <section class="about__section about__section__four bg__white pt-80 pb-120">
    <!--Container-->
    <div class="container">
      <div class="row align-items-center flex-row-reverse">
        <!--about content-->
        <div class="col-xxl-6 col-xl-6 col-lg-6">
          <div class="about__content">
            <div class="section__header">
              <h2>
                Turbo Main Community - Membangun Web Developer Handal
              </h2>
              <p>
                Turbo Main Community adalah komunitas yang berfokus pada pengembangan web menggunakan PHP.
                Kami berkomitmen untuk menciptakan lingkungan belajar yang kolaboratif dan mendukung perkembangan
                anggota kami melalui program mentorship tahunan. Dengan sistem mentor dari tingkat di atasnya,
                setiap anggota dapat berkembang secara optimal dalam dunia web development.
              </p>
            </div>
            <ul class="empower__list pb__40">
              <li>
                <span class="icon">
                  <i class="material-symbols-outlined">
                    task_alt
                  </i>
                </span>
                <span>
                  Mentorship Berjenjang
                </span>
              </li>
              <li>
                <span class="icon">
                  <i class="material-symbols-outlined">
                    task_alt
                  </i>
                </span>
                <span>
                  Pengembangan Skill PHP
                </span>
              </li>
              <li>
                <span class="icon">
                  <i class="material-symbols-outlined">
                    task_alt
                  </i>
                </span>
                <span>
                  Proyek Kolaboratif
                </span>
              </li>
              <li>
                <span class="icon">
                  <i class="material-symbols-outlined">
                    task_alt
                  </i>
                </span>
                <span>
                  Komunitas Profesional
                </span>
              </li>
            </ul>
          </div>
        </div>
        <!--about content-->
        <div class="col-xxl-1 col-xl-1 col-lg-1"></div>
        <!--about thumb-->
        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-9 col-sm-9">
          <div class="about__thumb">
            <img src="{{ asset('landing') }}/assets/img/about/about4.png" alt="about">
          </div>
        </div>
        <!--about thumb-->
      </div>
    </div>
    <!--Container-->
    <!--elements-->
    <div class="empower__element1">
      <img src="{{ asset('landing') }}/assets/img/banner/devided-element2.png" alt="img">
    </div>
    <div class="empower__lockyello">
      <img src="{{ asset('landing') }}/assets/img/banner/devided-lockyello.png" alt="img">
    </div>
    <div class="empower__blump">
      <img src="{{ asset('landing') }}/assets/img/banner/round-devided.png" alt="img">
    </div>
    <div class="empower__blump2">
      <img src="{{ asset('landing') }}/assets/img/banner/round-devided.png" alt="img">
    </div>
    <!--elements-->
  </section>
  
  <section class="efective__section efective__section__three bg__white pt-120 pb-120">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-xl-6 col-lg-7">
          <div class="efective__content">
            <div class="section__header pb__32">
              <h2>
                Metode Efektif dalam Pengembangan Web
              </h2>
              <p>
                Kami menyediakan pendekatan sistematis untuk belajar dan berkembang sebagai web developer.
                Dengan kurikulum berbasis proyek, setiap anggota mendapatkan pengalaman langsung dalam membangun aplikasi
                web.
              </p>
            </div>
            <div class="efective__data__wrapper">
              <div class="efect__data__iems">
                <div class="icons">1</div>
                <div class="content">
                  <h5>Pemahaman Dasar</h5>
                  <p>Memulai dengan memahami konsep dasar PHP, database, dan struktur kode yang baik.</p>
                </div>
              </div>
              <div class="efect__data__iems">
                <div class="icons icons2">2</div>
                <div class="content">
                  <h5>Implementasi Proyek</h5>
                  <p>Setiap anggota akan terlibat dalam proyek nyata untuk meningkatkan keterampilan praktis.</p>
                </div>
              </div>
              <div class="efect__data__iems">
                <div class="icons icons3">3</div>
                <div class="content">
                  <h5>Kolaborasi Tim</h5>
                  <p>Belajar bekerja dalam tim dengan menggunakan Git, Scrum, dan metodologi Agile.</p>
                </div>
              </div>
              <div class="efect__data__iems">
                <div class="icons icons4">4</div>
                <div class="content">
                  <h5>Evaluasi dan Pengembangan</h5>
                  <p>Setiap proyek akan dievaluasi untuk memastikan peningkatan keterampilan anggota secara berkelanjutan.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-12">
          <div class="efective__thumb">
            <img src="{{ asset('landing') }}/assets/img/efective/machine-ai.png" alt="efective">
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
