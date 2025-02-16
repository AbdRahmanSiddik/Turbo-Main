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
              <a href="razor-settings.html"
                class="flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary {{ request()->is('profile') ? 'active' : '' }}">
                <i data-tw-merge="" data-lucide="app-window" class="mr-3 h-4 w-4 stroke-[1.3]"></i>
                Profile Info
              </a>
              <a href="#"
                class="flex items-center py-3 first:-mt-3 last:-mb-3 [&.active]:text-primary [&.active]:font-medium hover:text-primary">
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
          <div class="box box--stacked flex flex-col p-5">
            <div class="mb-6 border-b border-dashed border-slate-300/70 pb-5 text-[0.94rem] font-medium">
              Profile Info
            </div>
            <form action="{{ route('profile.update', auth()->user()->id) }}" method="POST">
                @csrf
                <div>
                  <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                      <div class="text-left">
                        <div class="flex items-center">
                          <div class="font-medium">Nama Lengkap</div>
                          <div
                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                            Required
                          </div>
                        </div>
                        <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                          Enter your full legal name as it appears on your
                          official identification.
                        </div>
                      </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                      <div class="flex flex-col items-center md:flex-row">
                        <input data-tw-merge="" type="text" value="{{ auth()->user()->name }}" name="name"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker">
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                      <div class="text-left">
                        <div class="flex items-center">
                          <div class="font-medium">Email</div>
                          <div
                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                            Required
                          </div>
                        </div>
                        <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                          This information is required to verify your email.
                        </div>
                      </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                      <input data-tw-merge="" type="email" name="email" value="{{ auth()->user()->email }}"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker">
                    </div>
                  </div>
                  <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                      <div class="text-left">
                        <div class="flex items-center">
                          <div class="font-medium">Nomor Telepon</div>
                          <div
                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                            Required
                          </div>
                        </div>
                        <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                          Please provide a valid phone number where we can reach
                          you if needed.
                        </div>
                      </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                      <div class="flex flex-col items-center md:flex-row">
                        <input data-tw-merge="" type="number" name="telepon" value="{{ auth()->user()->profile->telepon ?? '' }}" placeholder="08123456789"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker">
                      </div>
                    </div>
                  </div>
                  <div class="mt-5 block flex-col pt-5 first:mt-0 first:pt-0 sm:flex xl:flex-row xl:items-center">
                    <div class="mb-2 inline-block sm:mb-0 sm:mr-5 sm:text-right xl:mr-14 xl:w-60">
                      <div class="text-left">
                        <div class="flex items-center">
                          <div class="font-medium">Alamat</div>
                          <div
                            class="ml-2.5 rounded-md border border-slate-200 bg-slate-100 px-2 py-0.5 text-xs text-slate-500 dark:bg-darkmode-300 dark:text-slate-400">
                            Required
                          </div>
                        </div>
                        <div class="mt-1.5 text-xs leading-relaxed text-slate-500/80 xl:mt-3">
                          Enter the postal code or ZIP code associated with your
                          address.
                        </div>
                      </div>
                    </div>
                    <div class="mt-3 w-full flex-1 xl:mt-0">
                      <input data-tw-merge="" type="text" placeholder="Jl. ..." name="alamat" value="{{ auth()->user()->profile->alamat ?? '' }}"
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                    </div>
                  </div>
                </div>
                <div class="mt-6 flex border-t border-dashed border-slate-300/70 pt-5 md:justify-end">
                  <button data-tw-merge="" type="submit"
                    class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 w-full border-primary/50 px-4 md:w-auto">Save
                    Changes</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

