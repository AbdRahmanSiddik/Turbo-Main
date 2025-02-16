@php
    $title = 'Profile'
@endphp
@extends('layout.template')

@section('content')
  <div class="grid grid-cols-12 gap-x-6 gap-y-10">
    <div class="col-span-12">
      <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
        <div class="text-base font-medium group-[.mode--light]:text-white">
          Settings
        </div>
        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
          <button data-tw-merge=""
            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] group-[.mode--light]:!text-slate-200"><i
              data-tw-merge="" data-lucide="external-link" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
            Go to My Profile</button>
        </div>
      </div>
      <div class="mt-3.5 grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="relative col-span-12 xl:col-span-3">
          <div class="sticky top-[104px]">
            <div class="box box--stacked flex flex-col px-5 pb-6 pt-5">
              <a href="{{ route('profile') }}"
                class="flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary {{ request()->is('profile') ? 'active' : '' }}">
                <i data-tw-merge="" data-lucide="app-window" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                Profile Info
              </a>
              <a href="{{ route('profile.password') }}"
                class="flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary {{ request()->is('profile/password') ? 'active' : '' }}">
                <i data-tw-merge="" data-lucide="key-round" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                Password
              </a>
              <a href="#"
                class="flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary">
                <i data-tw-merge="" data-lucide="bell-dot" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                Notification Settings
              </a>
              <a href="#"
                class="flex items-center text-danger py-3 first:-mt-3 last:-mb-3 [&.active]:text-danger [&.active]:font-medium hover:text-danger">
                <i data-tw-merge="" data-lucide="trash2" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                Account Deactivation
              </a>
            </div>
          </div>
        </div>
        <div class="col-span-12 flex flex-col gap-y-7 xl:col-span-9">
          <div class="box box--stacked flex flex-col p-1.5">
            <div class="relative h-60 w-full rounded-[0.6rem] bg-gradient-to-b from-theme-1/95 to-theme-2/95">
              <div
                class="w-full h-full relative overflow-hidden before:content-[''] before:absolute before:inset-0 before:bg-texture-white before:-mt-[50rem] after:content-[''] after:absolute after:inset-0 after:bg-texture-white after:-mt-[50rem]">
              </div>
              <div class="absolute inset-x-0 top-0 mx-auto mt-36 h-32 w-32">
                <div class="box image-fit h-full w-full overflow-hidden rounded-full border-[6px] border-white">
                  <img src="{{ asset('img/profile/'.(auth()->user()->profile->foto == 'default.png' ? '/10302971.png' : auth()->user()->profile->foto   )) }}" alt="Tailwise - Admin Dashboard Template">
                </div>
                <div
                  class="box absolute bottom-0 right-0 mb-2.5 mr-2.5 h-5 w-5 rounded-full border-2 border-white bg-success">
                </div>
              </div>
            </div>
            <div class="flex flex-col gap-y-3 rounded-[0.6rem] bg-slate-50 p-5 pt-12 sm:flex-row sm:items-end">
              <div>
                <label data-tw-merge=""
                  class="mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right flex items-center text-slate-500">
                  Data Anda dilindungi dan tidak akan disebarluaskan
                  <span data-placement="top" title="secure" class="tooltip cursor-pointer ml-1.5"><i data-tw-merge=""
                      data-lucide="info" class="h-3.5 w-3.5 stroke-[1.3] text-slate-500"></i></span>
                </label>
              </div>
              <form id="fotoForm" action="{{ route('foto.update', auth()->user()->id) }}" method="POST" enctype="multipart/form-data" style="display: none;">
                @csrf
                <input type="file" id="fotoInput" name="foto" onchange="document.getElementById('fotoForm').submit();">
              </form>
              <button data-tw-merge="" onclick="document.getElementById('fotoInput').click();"
                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 border-primary/50 sm:ml-auto"><i
                  data-tw-merge="" data-lucide="image" class="mr-2.5 h-4 w-4 stroke-[1.3]"></i>
                Ubah Foto Profile</button>
            </div>
          </div>
          @if (request()->is('profile'))
            @include('components.profile.info')
          @elseif(request()->is('profile/password'))
            @include('components.profile.password')
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection

