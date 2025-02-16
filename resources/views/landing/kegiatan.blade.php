<?php $title = 'Kegiatan'; ?>

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
          <div class="col-xxl-6 col-xl-8 col-lg-8 col-md-8">
            <div class="breadcumnd__content">
              <h1 class="title">
                Kegiatan
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
                  Kegiatan
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

  <!--Shop Section-->
  <section class="studies__section bg__white pt-80 pb-80">
    <!--container-->
    <div class="container">
      <!--studies Wrapper-->
      <div class="studies__wrap__one">
        <div class="row g-4 justify-content-center align-items-center">
          @foreach ($kegiatan as $item)
            <!--col grid-->
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
              <div class="realworld__items">
                <div class="thumb">
                  <img src="{{ asset('img/kegiatan/' . $item->thumbnail) }}" alt="{{ $item->nama_kegiatan }}">
                </div>
                <div class="content">
                  <h6>
                    {{ ucfirst(str_replace('_', ' ', $item->status)) }}
                  </h6>
                  <h4>
                    <span>{{ $item->nama_kegiatan }}</span>
                  </h4>
                  <p>
                    {{ Str::limit($item->deskripsi, 100, '...') }}
                  </p>
                  <a type="button" data-bs-toggle="modal" data-bs-target="#modalKegiatan{{ $item->id_kegiatan }}"
                    class="real__btn">
                    <span>Read More</span>
                    <span class="icon">
                      <i class="material-symbols-outlined">arrow_right_alt</i>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <!--col grid-->

            <!-- Modal -->
            <div class="modal fade" id="modalKegiatan{{ $item->id_kegiatan }}" tabindex="-1"
              aria-labelledby="modalKegiatanLabel{{ $item->id_kegiatan }}" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header bg-secondary">
                    <h5 class="modal-title text-white" id="modalKegiatanLabel{{ $item->id_kegiatan }}">
                      {{ $item->nama_kegiatan }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body bg-light text-dark p-3 rounded">
                    <div class="text-center mb-3">
                      <img src="{{ asset('img/kegiatan/' . $item->thumbnail) }}" alt="{{ $item->nama_kegiatan }}"
                        class="img-fluid rounded shadow-sm" style="max-height: 200px; object-fit: cover;">
                    </div>
                    <p><strong><i class="bi bi-calendar-event"></i> Tanggal Mulai:</strong>
                      {{ \Carbon\Carbon::parse($item->tanggal_mulai)->format('d M Y') }}</p>
                    <p><strong><i class="bi bi-calendar-check"></i> Tanggal Akhir:</strong>
                      {{ \Carbon\Carbon::parse($item->tanggal_akhir)->format('d M Y') }}</p>
                    <p><strong><i class="bi bi-info-circle"></i> Status:</strong> <span
                        class="badge bg-primary">{{ ucfirst(str_replace('_', ' ', $item->status)) }}</span></p>
                    <hr>
                    <p><strong><i class="bi bi-file-text"></i> Deskripsi:</strong></p>
                    <p class="text-muted">{{ $item->deskripsi }}</p>
                  </div>
                </div>
              </div>
            </div>
          @endforeach

        </div>
      </div>
      <!--studies Wrapper-->
    </div>
    <!--container-->
  </section>
  <!--Shop Section-->
@endsection
