<?php $title = 'Home'; ?>

@extends('layout.template_landing')

@section('content')
  <!-- Banner Here -->
  <section class="banner__section bannerbg">
    <!--Mask-->
    <div class="banner__bgmask">
      <img src="{{ asset('landing') }}/assets/img/elements/box-element.png" alt="mask">
    </div>
    <!--Mask-->
    <!--Container-->
    <div class="container">
      <div class="banner__wrapper">
        <div class="row g-4  justify-content-between">
          <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="banner__content">
              <div class="content__box">
                <span class="d3 mb-0  wow fadeInUp" data-wow-duration="2s">
                  Bergabunglah dengan
                </span>
                <span class="d3 wow fadeInDown" data-wow-duration="4s">
                  <span class="theme">Turbo</span> Main <span class="theme2">Community</span>
                </span>
                <p class="wow fadeInUp" data-wow-duration="2s">
                  Komunitas web development berbasis PHP yang siap membantu kamu berkembang! Dapatkan pengalaman
                  langsung,
                  bimbingan mentor, dan kesempatan untuk terlibat dalam proyek nyata.
                </p>
                <div class="btg__grp wow">
                  <a href="{{ route('register') }}" class="cmn--btn">
                    <span>Gabung Sekarang</span>
                  </a>
                  <a href="https://www.youtube.com/watch?v=u0BsCVq0Djw" class="play__btn video-btn">
                    <span class="play__icon">
                      <i class="material-symbols-outlined">
                        play_arrow
                      </i>
                    </span>
                    <span>
                      Lihat Video Intro
                    </span>
                  </a>
                </div>
              </div>
              <div class="ai__text">
                <img src="{{ asset('landing') }}/assets/img/elements/t-element.png" alt="ai">
              </div>
              <div class="ai__elements">
                <img src="{{ asset('landing') }}/assets/img/elements/ai-element.png" alt="ai">
              </div>
            </div>
          </div>
          <div class="col-xxl-1 col-xl-1 col-lg-1"></div>
          <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-8">
            <div class="banner__thumb">
              <div class="thumb">
                <img src="{{ asset('landing') }}/assets/img/banner/banner1.png" alt="banner">
              </div>
              <div class="rocket__element">
                <img src="{{ asset('landing') }}/assets/img/elements/rocket-element.png" alt="rocket">
              </div>
            </div>
          </div>
          <div class="col-xxl-1 col-xl-1 col-lg-1"></div>
        </div>
      </div>
    </div>
    <!--Container-->
    <!--Elements-->
    <div class="ball__element">
      <img src="{{ asset('landing') }}/assets/img/elements/ball-element.png" alt="ball">
    </div>
    <div class="banner__mask">
      <img src="{{ asset('landing') }}/assets/img/elements/shape-element1.png" alt="mask">
    </div>
    <div class="dark__mask d-none">
      <img src="{{ asset('landing') }}/assets/img/elements/banner-shape1-dark.png" alt="mask">
    </div>
    <div class="light__element1">
      <img src="{{ asset('landing') }}/assets/img/elements/light-elements.png" alt="light">
    </div>
    <div class="light__element2">
      <img src="{{ asset('landing') }}/assets/img/elements/light-elements.png" alt="light">
    </div>
    <div class="light__element3">
      <img src="{{ asset('landing') }}/assets/img/elements/light-elements.png" alt="light">
    </div>
    <div class="light__element4">
      <img src="{{ asset('landing') }}/assets/img/elements/light-elements.png" alt="light">
    </div>
    <div class="light__element5">
      <img src="{{ asset('landing') }}/assets/img/elements/light-elements.png" alt="light">
    </div>
    <!--Elements-->
  </section>
  <!-- Banner End -->

  <section class="about__section bg__white pt-120 pb__60">
    <div class="container">
      <div class="row align-items-center flex-row-reverse">
        <div class="col-xxl-6 col-xl-6 col-lg-6">
          <div class="about__content">
            <div class="section__header">
              <h2 class="wow fadeInUp" data-wow-duration="2s">
                Tentang Turbo Main Community
              </h2>
              <p class="wow fadeInDown" data-wow-duration="2s">
                Kami adalah komunitas yang berfokus pada pengembangan web dengan PHP. Setiap tahun, kami mengadakan
                rekrutmen untuk mencari bakat baru dan memberikan bimbingan langsung dari mentor yang sudah berpengalaman.
              </p>
            </div>
            <ul class="about__chack wow fadeInDown">
              <li>
                <span class="icon">
                  <i class="material-symbols-outlined">
                    task_alt
                  </i>
                </span>
                <span>
                  Mentoring oleh Developer Berpengalaman
                </span>
              </li>
              <li>
                <span class="icon">
                  <i class="material-symbols-outlined">
                    task_alt
                  </i>
                </span>
                <span>
                  Proyek Nyata untuk Pengalaman Langsung
                </span>
              </li>
              <li>
                <span class="icon">
                  <i class="material-symbols-outlined">
                    task_alt
                  </i>
                </span>
                <span>
                  Kegiatan Kolaboratif & Networking
                </span>
              </li>
              <li>
                <span class="icon">
                  <i class="material-symbols-outlined">
                    task_alt
                  </i>
                </span>
                <span>
                  Dukungan Sepanjang Waktu
                </span>
              </li>
            </ul>
            <a href="{{ route('tentangkami') }}" class="cmn--btn">
              <span>Selengkapnya</span>
            </a>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-9 col-sm-9">
          <div class="about__thumb">
            <img src="{{ asset('landing') }}/assets/img/about/about1.png" alt="about">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="feature__section bgsection pt-120 pb-120">
    <div class="container">
      <div class="section__header section__center pb__60 wow fadeInUp" data-wow-duration="2s">
        <h2>
          Layanan Unggulan Kami
        </h2>
        <p class="pb__32">
          Turbo Main Community menawarkan layanan terbaik dalam pengembangan web dan teknologi berbasis PHP.
        </p>
        <a href="{{ route('register') }}" class="cmn--btn border__btn">
          <span>
            Bergabung Sekarang
          </span>
        </a>
      </div>
      <div class="row g-5 justify-content-center align-items-center">
        <div class="col-sm-6 col-xl-4">
          <div class="feature__component__wrap feature__right__align">
            <div class="feature__items wow fadeInUp" data-wow-duration="1s">
              <div class="icon">
                <img src="{{ asset('landing') }}/assets/img/feature/coding.png" alt="icon" style="width: 50px; height: 50px;">
              </div>
              <div class="content">
                <h4>
                  Pengembangan Web
                </h4>
                <p>
                  Membangun aplikasi web modern dengan teknologi terkini.
                </p>
              </div>
            </div>
            <div class="feature__items pl__space wow fadeInUp" data-wow-duration="2s">
              <div class="icon">
                <img src="{{ asset('landing') }}/assets/img/feature/design.png" alt="icon" style="width: 50px; height: 50px;">
              </div>
              <div class="content">
                <h4>
                  Desain UI/UX
                </h4>
                <p>
                  Menciptakan tampilan antarmuka yang menarik dan fungsional.
                </p>
              </div>
            </div>
            <div class="feature__items wow fadeInUp" data-wow-duration="2.2s">
              <div class="icon">
                <img src="{{ asset('landing') }}/assets/img/feature/server.png" alt="icon" style="width: 50px; height: 50px;">
              </div>
              <div class="content">
                <h4>
                  Manajemen Server
                </h4>
                <p>
                  Mengelola infrastruktur server untuk kinerja optimal.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-8 order-sm-3 order-xl-2 col-xl-4">
          <div class="feature__thumb">
            <img src="{{ asset('landing') }}/assets/img/logo/fav1.png" alt="feature">
          </div>
        </div>
        <div class="col-sm-6 order-sm-2 col-xl-4">
          <div class="feature__component__wrap">
            <div class="feature__items wow fadeInUp" data-wow-duration="2.4s">
              <div class="icon">
                <img src="{{ asset('landing') }}/assets/img/feature/workshop.png" alt="icon" style="width: 50px; height: 50px;">
              </div>
              <div class="content">
                <h4>
                  Workshop dan Pelatihan
                </h4>
                <p>
                  Meningkatkan keterampilan anggota dengan pelatihan rutin.
                </p>
              </div>
            </div>
            <div class="feature__items pr__space wow fadeInUp" data-wow-duration="2.6s">
              <div class="icon">
                <img src="{{ asset('landing') }}/assets/img/feature/community.png" alt="icon" style="width: 50px; height: 50px;">
              </div>
              <div class="content">
                <h4>
                  Komunitas dan Networking
                </h4>
                <p>
                  Membangun koneksi dengan sesama pengembang dan profesional IT.
                </p>
              </div>
            </div>
            <div class="feature__items wow fadeInUp" data-wow-duration="2.8s">
              <div class="icon">
                <img src="{{ asset('landing') }}/assets/img/feature/project.png" alt="icon" style="width: 50px; height: 50px;">
              </div>
              <div class="content">
                <h4>
                  Pengembangan Proyek
                </h4>
                <p>
                  Mendukung anggota dalam membangun proyek berbasis PHP.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="feature__rocket">
      <img src="{{ asset('landing') }}/assets/img/elements/feature-rocket.png" alt="rocket">
    </div>
  </section>

  <section class="capabilities__section bgsection pt-120 pb-120">
    <div class="capa__mask">
      <img src="{{ asset('landing') }}/assets/img/elements/capamask.png" alt="capa-mask">
    </div>
    <div class="container">
      <div class="capabilites__header wow fadeInDown pb__60" data-wow-duration="2s">
        <div class="section__header">
          <h2>
            Kegiatan dan Inovasi Kami
          </h2>
          <p>
            Kami mengadakan berbagai kegiatan untuk meningkatkan keterampilan dan kolaborasi dalam pengembangan web.
          </p>
        </div>
        <a href="{{ route('kegiatan') }}" class="cmn--btn">
          <span>
            Lihat Semua Kegiatan
          </span>
        </a>
      </div>
      <div class="capabilities__wrap owl-theme owl-carousel wow fadeInUp" data-wow-duration="2s">
        @foreach ($kegiatan as $item)
          <div class="capabilities__items">
            <div class="thumb">
              <img src="{{ asset('img/kegiatan/' . $item->thumbnail) }}" alt="{{ $item->nama_kegiatan }}">
            </div>
            <div class="content">
              <button type="button" class="btn btn-outline-success mb-2 btn-sm" disabled>
                {{ ucfirst(str_replace('_', ' ', $item->status)) }}
              </button>
              <h4>
                <span>
                  {{ $item->nama_kegiatan }}
                </span>
              </h4>
              <p>
                {{ Str::limit($item->deskripsi, 100, '...') }}
              </p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="efective__section bg__white pt-120 pb-120">
    <!--container-->
    <div class="container">
      <div class="row justify-content-between flex-row-reverse">
        <!--col grid-->
        <div class="col-xl-6 col-lg-7">
          <div class="efective__content">
            <div class="section__header pb__32">
              <h2 class="wow fadeInUp" data-wow-duration="1s">
                Panduan Langkah Demi Langkah untuk Pemanfaatan Efektif
              </h2>
              <p class="wow fadeInDown" data-wow-duration="2s">
                Turbo Main Community hadir untuk membimbing Anda memahami pengembangan web dengan PHP melalui pendekatan
                yang sistematis dan praktis.
              </p>
            </div>
            <div class="efective__data__wrapper">
              <div class="efect__data__iems wow fadeInUp" data-wow-duration="1s">
                <div class="icons">
                  <img src="{{ asset('landing') }}/assets/img/efective/braindata.png" alt="icon">
                </div>
                <div class="content">
                  <h5>
                    Belajar dari Dasar
                  </h5>
                  <p>
                    Memulai dari pemahaman fundamental PHP hingga membangun aplikasi web yang kompleks.
                  </p>
                </div>
              </div>
              <div class="efect__data__iems wow fadeInUp" data-wow-duration="2s">
                <div class="icons icons2">
                  <img src="{{ asset('landing') }}/assets/img/efective/datastored.png" alt="icon">
                </div>
                <div class="content">
                  <h5>
                    Menyimpan dan Mengelola Data
                  </h5>
                  <p>
                    Menggunakan database untuk menyimpan dan mengelola informasi dengan efisien.
                  </p>
                </div>
              </div>
              <div class="efect__data__iems wow fadeInUp" data-wow-duration="2.2s">
                <div class="icons icons3">
                  <img src="{{ asset('landing') }}/assets/img/efective/dataprocessing.png" alt="icon">
                </div>
                <div class="content">
                  <h5>
                    Pemrosesan Data
                  </h5>
                  <p>
                    Memahami bagaimana data diolah dalam sebuah aplikasi web dengan teknik terbaik.
                  </p>
                </div>
              </div>
              <div class="efect__data__iems wow fadeInUp" data-wow-duration="2.5s">
                <div class="icons icons4">
                  <img src="{{ asset('landing') }}/assets/img/efective/actionable.png" alt="icon">
                </div>
                <div class="content">
                  <h5>
                    Penerapan dalam Proyek Nyata
                  </h5>
                  <p>
                    Menerapkan teori ke dalam praktik melalui proyek komunitas yang nyata.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--col grid-->
        <div class="col-xl-5 col-lg-5 col-md-12">
          <div class="efective__thumb">
            <img src="{{ asset('landing') }}/assets/img/efective/efective.png" alt="efective">
            <!--efect Element-->
            <div class="efect__element2">
              <img src="{{ asset('landing') }}/assets/img/elements/efect-cross2.png" alt="img">
            </div>
            <div class="efect__element3">
              <img src="{{ asset('landing') }}/assets/img/elements/efect-cross.png" alt="img">
            </div>
            <div class="efect__element4">
              <img src="{{ asset('landing') }}/assets/img/elements/efect-trevuj.png" alt="img">
            </div>
            <div class="efect__element5">
              <img src="{{ asset('landing') }}/assets/img/elements/efecttablet1.png" alt="img">
            </div>
            <div class="efect__element6">
              <img src="{{ asset('landing') }}/assets/img/elements/efecttablet2.png" alt="img">
            </div>
            <div class="efect__element7">
              <img src="{{ asset('landing') }}/assets/img/elements/efect-rount.png" alt="img">
            </div>
            <!--efect Element-->
          </div>
        </div>
        <!--col grid-->
      </div>
    </div>
    <!--container-->
    <!--elements-->
    <div class="eye__elements">
      <img src="{{ asset('landing') }}/assets/img/elements/eye-element.png" alt="eye">
    </div>
    <div class="efect__element1">
      <img src="{{ asset('landing') }}/assets/img/elements/efect-ball.png" alt="img">
    </div>
    <!--elements-->
  </section>
@endsection
