@extends('layout.template')

@section('breadcrumb')
  <nav aria-label="breadcrumb" class="flex hidden flex-1 xl:block">
    <ol class="flex items-center text-theme-1 dark:text-slate-300">
      <li class="">
        <a href="/">Dashboard</a>
      </li>
      <li
        class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-slate-600 cursor-text dark:text-slate-400">
        <a href="#">Pendaftaran</a>
      </li>
    </ol>
  </nav>
@endsection

@section('content')
  <div class="col-span-12 flex flex-col gap-y-10 xl:col-span-6">
    <div>
      <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
        <div class="text-base font-medium">Team Collaboration</div>
      </div>
      <div class="box box--stacked mt-3.5 p-5">
        @foreach ($kegiatan as $get)
          <div
            class="relative flex flex-col items-center gap-5 rounded-lg border border-dashed border-slate-300/60 p-3 sm:flex-row mb-2">
            <div>
              <div class="image-fit h-24 w-40 rounded-md border-[3px] border-slate-200/70">
                <img class="rounded-md saturate-[0.7]" src="{{ asset('img/kegiatan/' . $get->thumbnail) }}"
                  alt="Tailwise - Admin Dashboard Template">
              </div>
            </div>
            <div class="-mt-1">
              <p class="block text-center font-medium sm:text-left" href="">
                {{ $get->nama_kegiatan }}
              </p>
              <div class="mt-2.5 flex items-center text-xs text-slate-500 dark:text-slate-500">
                <i data-tw-merge="" data-lucide="calendar" class="mr-1.5 h-2.5 w-2.5 stroke-[2]"></i>
                <span class="mr-2">Tanggal Mulai:
                  {{ \Carbon\Carbon::parse($get->tanggal_mulai)->locale('id')->isoFormat('D MMMM YYYY') }}</span>
                <i data-tw-merge="" data-lucide="calendar" class="mr-1.5 h-2.5 w-2.5 stroke-[2]"></i>
                <span>Tanggal Akhir:
                  {{ \Carbon\Carbon::parse($get->tanggal_akhir)->locale('id')->isoFormat('D MMMM YYYY') }}</span>
              </div>
              <div class="mt-4 flex items-center justify-center sm:justify-start">
                <div class="flex">
                  <div class="image-fit zoom-in h-6 w-6">
                    <img data-placement="top" title="Jennifer Lawrence" src="dist/images/users/user6-50x50.jpg"
                      alt="Tailwise - Admin Dashboard Template"
                      class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                  </div>
                  <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                    <img data-placement="top" title="Leonardo DiCaprio" src="dist/images/users/user3-50x50.jpg"
                      alt="Tailwise - Admin Dashboard Template"
                      class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                  </div>
                  <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                    <img data-placement="top" title="Denzel Washington" src="dist/images/users/user9-50x50.jpg"
                      alt="Tailwise - Admin Dashboard Template"
                      class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                  </div>
                </div>
                <div class="ml-3 text-xs text-slate-500">
                  4+ Members
                </div>
              </div>
            </div>
            <div class="mt-4 ml-auto">
{{-- @dd(auth()->user()->pendaftaran) --}}
              @if (auth()->user()->pendaftarans?->pluck('kegiatan_id')->contains($get->id_kegiatan))
                <button disabled
                  class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 mr-1 w-24 mr-1 w-24">Sudah
                  Mendaftar</button>
              @else
                <button type="button" data-tw-toggle="modal"
                  data-tw-target="#delete-modal-preview{{ $get->token_kegiatan }}"
                  class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-24">Daftar</button>
              @endif
              <!-- BEGIN: Modal Content -->
              <div data-tw-backdrop="" aria-hidden="true" tabindex="-1"
                id="delete-modal-preview{{ $get->token_kegiatan }}"
                class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                <div data-tw-merge
                  class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
                  <div class="p-5 text-center">
                    {{-- <i data-tw-merge data-lucide="x-circle"
                      class="stroke-[1] w-5 h-5 mx-auto mt-3 h-16 w-16 text-danger mx-auto mt-3 h-16 w-16 text-danger"></i> --}}
                    <img src="{{ asset('landing/assets/img/logo/fav1.png') }}" alt="" style="margin: 10px auto;"
                      width="150px">
                    <div class="mt-5 text-3xl">{{ $get->nama_kegiatan }}</div>
                    <div class="mt-2 text-slate-500">
                      Anda yakin ingin mengikuti Pelatihan ini? <br>
                      Proses ini tidak dapat dibatalkan.
                    </div>
                  </div>
                  <div class="px-5 pb-8 text-center">

                    <form action="{{ route('kegiatan.daftar') }}" method="POST">
                      @csrf
                      <input type="hidden" name="peserta_id" value="{{ auth()->user()->id }}">
                      <input type="hidden" name="kegiatan_id" value="{{ $get->id_kegiatan }}">
                      <button data-tw-merge data-tw-dismiss="modal" type="button"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-danger border-danger text-white dark:border-danger w-24 w-24">Cancel</button>
                      {{-- @dd(auth()->user()->pendaftaran) --}}
                      <button data-tw-merge type="submit"
                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary w-24">Daftar</button>
                    </form>
                  </div>
                </div>
              </div>
              <!-- END: Modal Content -->
            </div>
          </div>
        @endforeach
      </div>
    </div>
  @endsection
