<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TURBO MAIN » {{ $title }}</title>
  <!--Favicon img-->
  <link rel="shortcut icon" href="{{ asset('landing') }}/assets/img/logo/fav1.png">
  <!--main css-->
  <link rel="stylesheet" href="{{ asset('landing') }}/assets/css/main.css">
</head>

<body>
  <!-- Preloader Start Heres -->
  <div class="preloader__wrap">
    <div class="preloader__box">
      <div class="robot">
        <img src="{{ asset('landing') }}/assets/img/elements/ponkhi.png" alt="img">
      </div>
    </div>
  </div>
  <!-- Preloader End Heres -->

  <!-- Header top Here -->
  <section class="header-section">
    <div class="header-testting-wrap">
      <header class="header">
        <div class="container">
          <div class="header-testting-inner d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <div class="header-item item-left">
              <div class="logo-menu">
                <a href="{{ route('home') }}" class="logo d-xl-block d-none">
                  <img src="{{ asset('landing') }}/assets/img/logo/logo1.png" alt="logo"
                    style="filter: brightness(0) invert(1);">
                </a>
                <a href="{{ route('home') }}" class="logo logo-small d-xl-none">
                  <img src="{{ asset('landing') }}/assets/img/logo/fav1.png" alt="logo"
                    style="filter: brightness(0) invert(1);">
                </a>
              </div>
            </div>
            <!-- Menu Start -->
            <div class="header-item">
              <div class="menu-overlay"></div>
              <nav class="menu">
                <!-- Mobile Menu Head -->
                <div class="mobile-menu-head">
                  <div class="go-back">
                    <i class="material-symbols-outlined">
                      arrow_back_ios
                    </i>
                  </div>
                  <div class="current-menu-title"></div>
                  <div class="mobile-menu-close">&times;</div>
                </div>
                <!-- Mian Menu -->
                <ul class="menu-main">
                  <li class="menu-item-has-children">
                    <a href="{{ route('home') }}" class="menu-mitem d-flex align-items-center">
                      Home
                    </a>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="{{ route('tentangkami') }}" class="menu-mitem d-flex align-items-center">
                      Tentang Kami
                    </a>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="{{ route('kegiatan') }}" class="menu-mitem d-flex align-items-center">
                      Kegiatan
                    </a>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="{{ route('servis') }}" class="menu-mitem d-flex align-items-center">
                      Servis
                    </a>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="{{ route('kontak') }}" class="menu-mitem d-flex align-items-center">
                      Kontak Kami
                    </a>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="{{ route('faq') }}" class="menu-mitem d-flex align-items-center">
                      FAQ
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- Menu End -->
            <div class="header-item item-righ d-flex align-items-center justify-content-center">
              <div class="menu__components">
                <a href="{{ route('login') }}" class="cmn--btn">
                  <span>
                    Login
                  </span>
                </a>
              </div>
              <!-- Mobile Menu Tigger -->
              <div class="mobile-menu-trigger">
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </header>
    </div>
  </section>
  <!-- Header top End -->

  @yield('content')

  <!-- Footer Here -->
  <footer class="footer__section">
    <!--shpa-->
    <div class="footer__shape">
      <img src="{{ asset('landing') }}/assets/img/elements/footer-shape.png" alt="img">
    </div>
    <div class="footer__darkshpae">
      <img src="{{ asset('landing') }}/assets/img/elements/footer-shapedark.png" alt="img">
    </div>
    <!--shpa-->
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__top">
          <div class="row g-5">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
              <div class="footer__widget">
                <div class="widget__head">
                  <a href="index.html" class="footer__logo">
                    <img src="{{ asset('landing') }}/assets/img/logo/logo1.png" alt="logo" style="filter: brightness(0) invert(1);">
                  </a>
                </div>
                <p class="pb__20">
                  Artificial Intelligence (AI) and Machine Learning (ML) are closely related technologies that enable
                  computers to learn from data and make predictions
                </p>
                <ul class="social">
                  <li>
                    <a href="javascript:void(0)" class="social__item">
                      <span class="icon">
                        <img src="{{ asset('landing') }}/assets/img/svg-icon/facebook.svg" alt="svg">
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)" class="social__item social__itemtwo">
                      <span class="icon">
                        <img src="{{ asset('landing') }}/assets/img/svg-icon/instagram.svg" alt="svg">
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)" class="social__item social__itemthree">
                      <span class="icon">
                        <img src="{{ asset('landing') }}/assets/img/svg-icon/twitter.svg" alt="svg">
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)" class="social__item social__itemfour">
                      <span class="icon">
                        <img src="{{ asset('landing') }}/assets/img/svg-icon/linkedin.svg" alt="svg">
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
              <div class="footer__widget">
                <div class="widget__head">
                  <h4>
                    Quick Links
                  </h4>
                </div>
                <div class="widget__link">
                  <a href="{{ route('home') }}" class="link">
                    Home
                  </a>
                  <a href="{{ route('tentangkami') }}" class="link">
                    Tentang Kami
                  </a>
                  <a href="{{ route('kegiatan') }}" class="link">
                    Kegiatan
                  </a>
                  <a href="{{ route('servis') }}" class="link">
                    Servis
                  </a>
                  <a href="{{ route('kontak') }}" class="link">
                    Kontak Kami
                  </a>
                  <a href="{{ route('faq') }}" class="link">
                    FAQ
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
              <div class="footer__widget">
                <div class="widget__head">
                  <h4>
                    Newsletter
                  </h4>
                </div>
                <p class="pb__20">
                  Subscribe our newsletter to get our latest update & news
                </p>
                <form action="#">
                  <input type="email" placeholder="Your email address">
                  <button type="submit" class="cmn--btn">
                    <span>
                      <i class="material-symbols-outlined">
                        rocket_launch
                      </i>
                    </span>
                  </button>
                </form>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
              <div class="footer__widget">
                <div class="widget__head">
                  <h4>
                    Contact
                  </h4>
                </div>
                <div class="widget__link">
                  <a href="javascript:void(0)" class="footer__contact__items">
                    <span class="icon">
                      <i class="material-symbols-outlined">
                        add_call
                      </i>
                    </span>
                    <span class="fcontact__content">
                      (406) 555-0120
                    </span>
                  </a>
                  <a href="javascript:void(0)" class="footer__contact__items">
                    <span class="icon icontwo">
                      <i class="material-symbols-outlined">
                        mark_as_unread
                      </i>
                    </span>
                    <span class="fcontact__content">
                      <span class="__cf_email__"
                        data-cfemail="385d40595548545d785d40595548545d165b5755">[email&#160;protected]</span>
                    </span>
                  </a>
                  <a href="javascript:void(0)" class="footer__contact__items">
                    <span class="icon iconthree">
                      <span class="material-symbols-outlined">
                        pin_drop
                      </span>
                    </span>
                    <span class="fcontact__content">
                      Westheimer Rd. Santa Ana, Illinois
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer__bottom">
          <p>
            Copyright &copy;2024 <a href="javascript:void(0)" class="intellicon">Intellicon</a>. Designed By <a
              href="https://themeforest.net/user/pixelaxis" class="theme">Pixelaxis</a>
          </p>
        </div>
      </div>
    </div>
    <!--footer mask-->
    <div class="footer__mask">
      <img src="{{ asset('landing') }}/assets/img/elements/box-element.png" alt="mask">
    </div>
    <!--footer mask-->
  </footer>
  <!-- Footer End -->

  <!--Jquery 3 6 0 Min Js-->
  <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="{{ asset('landing') }}/assets/js/jquery-3.6.0.min.js"></script>
  <!--Bootstrap bundle Js-->
  <script src="{{ asset('landing') }}/assets/js/bootstrap.bundle.min.js"></script>
  <!--Viewport Jquery Js-->
  <script src="{{ asset('landing') }}/assets/js/viewport.jquery.js"></script>
  <!--Odometer min Js-->
  <script src="{{ asset('landing') }}/assets/js/odometer.min.js"></script>
  <!--Magnifiw Popup Js-->
  <script src="{{ asset('landing') }}/assets/js/jquery.magnific-popup.min.js"></script>
  <!--Wow min Js-->
  <script src="{{ asset('landing') }}/assets/js/wow.min.js"></script>
  <!--Owl carousel min Js-->
  <script src="{{ asset('landing') }}/assets/js/owl.carousel.min.js"></script>
  <!--Prijm Js-->
  <script src="{{ asset('landing') }}/assets/js/prism.js"></script>
  <!--main Js-->
  <script src="{{ asset('landing') }}/assets/js/main.js"></script>
</body>


<!-- Mirrored from pixner.net/intellicon/intellicon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Feb 2025 11:49:13 GMT -->

</html>
