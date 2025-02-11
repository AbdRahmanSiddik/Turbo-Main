<?php $title = 'FAQ'; ?>

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
                FAQ
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
                  FAQ
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

  <!-- FAQ Section -->
  <section class="faq__section__four bg__white pt-120 pb-120">
    <div class="container">
      <div class="row justify-content-between">
        <!-- FAQ Content -->
        <div class="col-xxl-12 col-xl-12 col-lg-12">
          <div class="main__accordion__content">
            <div class="accordion__wrap">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Apa itu Turbo Main Community?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>
                        Turbo Main Community adalah komunitas web development berbasis PHP yang berfokus pada pembelajaran
                        bersama, mentoring, dan pengembangan skill bagi anggota melalui proyek nyata.
                        #KaryaNyataUntukUNIBA
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Bagaimana cara bergabung dengan komunitas ini?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>
                        Pendaftaran dibuka setiap tahun melalui proses rekrutmen. Kami mencari individu yang bersemangat
                        dalam belajar dan ingin berkembang di dunia web development.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Apa saja yang dipelajari di komunitas ini?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>
                        Kami fokus pada pengembangan web dengan PHP, Laravel, manajemen database, dan best practices dalam
                        software development.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Apakah ada mentor di komunitas ini?
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>
                        Ya, setiap tahun kami memiliki mentor dari anggota yang lebih senior untuk membimbing peserta baru
                        agar lebih cepat memahami konsep yang diajarkan.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Apakah ada proyek yang bisa dikerjakan bersama?
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>
                        Ya, kami memiliki berbagai proyek kolaboratif yang bisa dijadikan sebagai pengalaman nyata dalam
                        pengembangan web.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FAQ Section End -->


  <!-- Project Counter Here -->
  <section class="project__count bg__white pt-120 pb-120">
    <!--wrapper-->
    <div class="project__count__wrap">
      <!--container-->
      <div class="container">
        <!--project-head-->
        <div class="project__head">
          <div class="section__header section__center pb__60">
            <h2>
              Turbo Main Community terus berkembang dengan berbagai pencapaian setiap tahunnya!
            </h2>
            <p>
              Kami berfokus pada pengembangan web berbasis PHP dan selalu berinovasi dalam setiap proyek yang kami
              kerjakan.
            </p>
          </div>
        </div>
        <!--project-head-->
        <div class="row g-5 justify-content-center align-items-center">
          <!--col grid-->
          <div class="col-xxl-7 mx-auto">
            <div class="project__qustion">
              <div class="project__qustion__left">
                <h5>
                  Punya pertanyaan tentang komunitas kami?
                </h5>
                <p>
                  Jangan ragu untuk menghubungi kami.
                </p>
              </div>
              <div class="project__qustion__right">
                <a href="{{ route('kontak') }}" class="cmn--btn">
                  <span>
                    Hubungi Kami
                  </span>
                </a>
              </div>
            </div>
          </div>
          <!--col grid-->
        </div>
      </div>
      <!--container-->

      <!--porject efect-->
      <div class="project__map">
        <img src="{{ asset('landing') }}/assets/img/elements/map.png" alt="img">
      </div>
      <!--porject efect-->
    </div>
    <!--wrapper-->
  </section>
  <!-- Project Counter End -->
@endsection
