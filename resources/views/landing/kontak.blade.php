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
          Get in touch with us.
        </h2>
        <p>
          Fill up the form and our team will get back to you within 24 hours
        </p>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="form_area">
            <form id="form">
              <div class="row g-4">
                <div class="col-lg-6">
                  <div class="form-control">
                    <label for="Name">Name</label>
                    <input type="text" id="Name" placeholder="Enter Your Mane...">
                    <small>Error message</small>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-control">
                    <label for="semail">Email</label>
                    <input type="email" id="semail" placeholder="Enter Your Email...">
                    <small>Error message</small>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-control">
                    <label for="phone">Phone</label>
                    <input type="number" id="phone" placeholder="Enter Your Number...">
                    <small>Error message</small>
                  </div>
                </div>
                <div class="col-lg-6">
                  <label id="country">Country</label>
                  <div class="select-wrapper">
                    <select>
                      <option value="1">Country...</option>
                      <option value="1">....</option>
                      <option value="1">....</option>
                      <option value="1">....</option>
                      <option value="1">....</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-control">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="10" rows="5" placeholder="Enter Your Message..."></textarea>
                    <small>Error message</small>
                  </div>
                </div>
              </div>
              <div class="submit__btn text-center mt-4">
                <button type="submit" class="cmn--btn">
                  <span>
                    Send Message
                  </span>
                </button>
              </div>
              <div class="thank_you">
                <p>Your Message is successfully send !</p>
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
        <h2>
          Need more help?
        </h2>
        <p>
          Queries, complaints and feedback. We will be happy to serve you
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
                Call Now
              </h5>
              <a href="javacript:void(0)">
                (907) 555-0101
              </a>
              <a href="javacript:void(0)">
                (252) 555-0126
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
              <a href="javascript:void(0)">
                <span class="__cf_email__"
                  data-cfemail="4a392b382b6429383f300a2f322b273a262f64292527">[email&#160;protected]</span>
              </a>
              <a href="javascript:void(0)">
                <span class="__cf_email__"
                  data-cfemail="6e0c070202401d0f000a0b1c1d2e0b160f031e020b400d0103">[email&#160;protected]</span>
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
              <a href="javacript:void(0)">
                Royal Ln. Mesa, New Jersey 45463
              </a>
              <a href="javacript:void(0)">
                Thornridge Cir. Shiloh, Hawaii 81063
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
