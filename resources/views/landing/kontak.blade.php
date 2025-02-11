<?php $title = 'Kontak Kami'; ?>

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
                Kontak Kami
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
                  Kontak
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

  <!--Contact Section Start-->
  <section class="contact__section bg__white pt-120 pb-120">
    <div class="container">
      <div class="section__header section__center pb__60">
        <h2>
          Hubungi Kami
        </h2>
        <p>
          Ada pertanyaan atau ingin bergabung dengan komunitas kami? Kirim pesan, dan tim kami akan segera merespons!
        </p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="form_area">
            <form id="form" action="{{ route('contact.send') }}" method="POST" class="p-4 rounded shadow bg-light">
              @csrf
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-control p-3">
                    <label for="name" class="fw-bold">Nama Lengkap</label>
                    <input type="text" value="{{ old('name') }}" id="name" name="name"
                      class="form-control mt-2" placeholder="Masukkan Nama Anda...">
                    <small class="text-danger error-message"></small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-control p-3">
                    <label for="email" class="fw-bold">Email</label>
                    <input type="email" value="{{ old('email') }}" id="email" name="email"
                      class="form-control mt-2" placeholder="Masukkan Email Anda...">
                    <small class="text-danger error-message"></small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-control p-3">
                    <label for="phone" class="fw-bold">Nomor HP</label>
                    <input type="number" value="{{ old('phone') }}" id="phone" name="phone"
                      class="form-control mt-2" placeholder="Masukkan Nomor HP Anda...">
                    <small class="text-danger error-message"></small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-control p-3">
                    <label for="subject" class="fw-bold">Subjek</label>
                    <input type="text" value="{{ old('subject') }}" id="subject" name="subject"
                      class="form-control mt-2" placeholder="Masukkan Subjek Anda...">
                    <small class="text-danger error-message"></small>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-control p-3">
                    <label for="message" class="fw-bold">Pesan</label>
                    <textarea id="message" name="message" class="form-control mt-2" rows="5"
                      placeholder="Tulis pesan Anda di sini...">{{ old('message') }}</textarea>
                    <small class="text-danger error-message"></small>
                  </div>
                </div>
                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-primary btn-lg w-100 mt-3">
                    <i class="bi bi-send-fill"></i> Kirim Pesan
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Contact Section End-->


  <!--Contact help section-->
  <section class="need__help bg__white pt-120 pb-120">
    <!--container-->
    <div class="container">
      <div class="section__header section__center pb__60">
        <h2>Butuh Bantuan?</h2>
        <p>
          Ada pertanyaan, saran, atau ingin bergabung dengan komunitas kami?
          Kami siap membantu Anda!
        </p>
      </div>
      <div class="row g-4">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
          <div class="help__box">
            <div class="icon">
              <i class="material-symbols-outlined">
                add_call
              </i>
            </div>
            <div class="cont">
              <h5>
                Contact Person
              </h5>
              <a href="https://wa.me/6287879507355">
                +62 878-7950-7355
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
          <div class="help__box">
            <div class="icon icon2">
              <i class="material-symbols-outlined">
                mark_as_unread
              </i>
            </div>
            <div class="cont">
              <h5>
                Email Address
              </h5>
              <a href="mailto:turbo.mainn@gmail.com">
                <span class="__cf_email__"
                  data-cfemail="4a392b382b6429383f300a2f322b273a262f64292527">turbo.mainn@gmail.com</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
          <div class="help__box">
            <div class="icon icon3">
              <i class="material-symbols-outlined">
                pin_drop
              </i>
            </div>
            <div class="cont">
              <h5>
                Location
              </h5>
              <a
                href="https://www.google.com/maps/search/?api=1&query=Jl.+Raya+Lenteng,+Aredake,+Batuan,+Kec.+Batuan,+Kabupaten+Sumenep,+Jawa+Timur">
                Jl. Raya Lenteng, Aredake, Batuan, Kec. Batuan, Kabupaten Sumenep, Jawa Timur
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--container-->
  </section>
  <!--Contact help section-->
@endsection
