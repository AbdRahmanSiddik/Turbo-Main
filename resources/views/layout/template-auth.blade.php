<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="opacity-0" lang="en"><!-- BEGIN: Head -->

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="UTDQHUMnQs9GC9VYhC9EaF5Db5U3oNpH3LpUisuu">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description"
    content="Tailwise admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Tailwise Admin Template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="LEFT4CODE">
  <link rel="shortcut icon" href="{{ asset('landing/assets/img/logo/fav2.png') }}" type="image/x-icon">
  <title>Turbo Authentication</title>
  @include('components.style')
</head>
<!-- END: Head -->

<body>
  <div>
    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="theme-switcher"
      class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
      <div data-tw-merge=""
        class="ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px] w-72 rounded-[0.75rem_0_0_0.75rem/1.1rem_0_0_1.1rem]">
        <a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14"
          data-tw-dismiss="modal" href="javascript:;">
          <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-3 w-3 sm:h-8 sm:w-8"></i>
        </a>
        <div data-tw-merge="" class="overflow-y-auto flex-1 p-0">
          <div class="flex flex-col">
            <div class="px-8 pb-8 pt-6">
              <div class="text-base font-medium">Templates</div>
              <div class="mt-0.5 text-slate-500">Choose your templates</div>
              <div class="mt-5 grid grid-cols-2 gap-x-5 gap-y-3.5">
                <div>
                  <a href="echo-dashboard-overview-1.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                    <div class="h-full w-full overflow-hidden rounded-md">
                      <img class="h-full w-full" src="{{ asset('') }}assets/dist/images/themes/echo.png"
                        alt="Tailwise - Admin Dashboard Template">
                    </div>
                  </a>
                  <div class="mt-2.5 text-center text-xs capitalize">
                    echo
                  </div>
                </div>
                <div>
                  <a href="hurricane-dashboard-overview-1.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                    <div class="h-full w-full overflow-hidden rounded-md">
                      <img class="h-full w-full" src="{{ asset('') }}assets/dist/images/themes/hurricane.png"
                        alt="Tailwise - Admin Dashboard Template">
                    </div>
                  </a>
                  <div class="mt-2.5 text-center text-xs capitalize">
                    hurricane
                  </div>
                </div>
                <div>
                  <a href="ravage-dashboard-overview-1.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                    <div class="h-full w-full overflow-hidden rounded-md">
                      <img class="h-full w-full" src="{{ asset('') }}assets/dist/images/themes/ravage.png"
                        alt="Tailwise - Admin Dashboard Template">
                    </div>
                  </a>
                  <div class="mt-2.5 text-center text-xs capitalize">
                    ravage
                  </div>
                </div>
                <div>
                  <a href="hook-dashboard-overview-1.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                    <div class="h-full w-full overflow-hidden rounded-md">
                      <img class="h-full w-full" src="{{ asset('') }}assets/dist/images/themes/hook.png"
                        alt="Tailwise - Admin Dashboard Template">
                    </div>
                  </a>
                  <div class="mt-2.5 text-center text-xs capitalize">
                    hook
                  </div>
                </div>
                <div>
                  <a href="razor-dashboard-overview-1.html"
                    class="h-28 cursor-pointer bg-slate-50 box p-1 block border-2 border-theme-1/60">
                    <div class="h-full w-full overflow-hidden rounded-md">
                      <img class="h-full w-full" src="{{ asset('') }}assets/dist/images/themes/razor.png"
                        alt="Tailwise - Admin Dashboard Template">
                    </div>
                  </a>
                  <div class="mt-2.5 text-center text-xs capitalize">
                    razor
                  </div>
                </div>
                <div>
                  <a href="havoc-dashboard-overview-1.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                    <div class="h-full w-full overflow-hidden rounded-md">
                      <img class="h-full w-full" src="{{ asset('') }}assets/dist/images/themes/havoc.png"
                        alt="Tailwise - Admin Dashboard Template">
                    </div>
                  </a>
                  <div class="mt-2.5 text-center text-xs capitalize">
                    havoc
                  </div>
                </div>
                <div>
                  <a href="dagger-dashboard-overview-1.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                    <div class="h-full w-full overflow-hidden rounded-md">
                      <img class="h-full w-full" src="{{ asset('') }}assets/dist/images/themes/dagger.png"
                        alt="Tailwise - Admin Dashboard Template">
                    </div>
                  </a>
                  <div class="mt-2.5 text-center text-xs capitalize">
                    dagger
                  </div>
                </div>
                <div>
                  <a href="shuriken-dashboard-overview-1.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                    <div class="h-full w-full overflow-hidden rounded-md">
                      <img class="h-full w-full" src="{{ asset('') }}assets/dist/images/themes/shuriken.png"
                        alt="Tailwise - Admin Dashboard Template">
                    </div>
                  </a>
                  <div class="mt-2.5 text-center text-xs capitalize">
                    shuriken
                  </div>
                </div>
                <div>
                  <a href="raze-dashboard-overview-1.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                    <div class="h-full w-full overflow-hidden rounded-md">
                      <img class="h-full w-full" src="{{ asset('') }}assets/dist/images/themes/raze.png"
                        alt="Tailwise - Admin Dashboard Template">
                    </div>
                  </a>
                  <div class="mt-2.5 text-center text-xs capitalize">
                    raze
                  </div>
                </div>
                <div>
                  <a href="exort-dashboard-overview-1.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                    <div class="h-full w-full overflow-hidden rounded-md">
                      <img class="h-full w-full" src="{{ asset('') }}assets/dist/images/themes/exort.png"
                        alt="Tailwise - Admin Dashboard Template">
                    </div>
                  </a>
                  <div class="mt-2.5 text-center text-xs capitalize">
                    exort
                  </div>
                </div>
                <div>
                  <a href="viper-dashboard-overview-1.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                    <div class="h-full w-full overflow-hidden rounded-md">
                      <img class="h-full w-full" src="{{ asset('') }}assets/dist/images/themes/viper.png"
                        alt="Tailwise - Admin Dashboard Template">
                    </div>
                  </a>
                  <div class="mt-2.5 text-center text-xs capitalize">
                    viper
                  </div>
                </div>
              </div>
            </div>
            <div class="border-b border-dashed"></div>
            <div class="px-8 pb-8 pt-6">
              <div class="text-base font-medium">Color Schemes</div>
              <div class="mt-0.5 text-slate-500">
                Choose your color schemes
              </div>
              <div class="mt-5 grid grid-cols-2 gap-x-4 gap-y-3.5 sm:grid-cols-4">
                <div>
                  <a data-theme-color="default"
                    class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                    <div class="h-full overflow-hidden rounded-full">
                      <div class="-mx-2 flex h-full items-center gap-1">
                        <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 default"></div>
                        <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 default"></div>
                      </div>
                    </div>
                  </a>
                </div>
                <div>
                  <a data-theme-color="theme-1"
                    class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                    <div class="h-full overflow-hidden rounded-full">
                      <div class="-mx-2 flex h-full items-center gap-1">
                        <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-1"></div>
                        <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-1"></div>
                      </div>
                    </div>
                  </a>
                </div>
                <div>
                  <a data-theme-color="theme-2"
                    class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                    <div class="h-full overflow-hidden rounded-full">
                      <div class="-mx-2 flex h-full items-center gap-1">
                        <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-2"></div>
                        <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-2"></div>
                      </div>
                    </div>
                  </a>
                </div>
                <div>
                  <a data-theme-color="theme-3"
                    class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                    <div class="h-full overflow-hidden rounded-full">
                      <div class="-mx-2 flex h-full items-center gap-1">
                        <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-3"></div>
                        <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-3"></div>
                      </div>
                    </div>
                  </a>
                </div>
                <div>
                  <a data-theme-color="theme-4"
                    class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                    <div class="h-full overflow-hidden rounded-full">
                      <div class="-mx-2 flex h-full items-center gap-1">
                        <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-4"></div>
                        <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-4"></div>
                      </div>
                    </div>
                  </a>
                </div>
                <div>
                  <a data-theme-color="theme-5"
                    class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                    <div class="h-full overflow-hidden rounded-full">
                      <div class="-mx-2 flex h-full items-center gap-1">
                        <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-5"></div>
                        <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-5"></div>
                      </div>
                    </div>
                  </a>
                </div>
                <div>
                  <a data-theme-color="theme-6"
                    class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                    <div class="h-full overflow-hidden rounded-full">
                      <div class="-mx-2 flex h-full items-center gap-1">
                        <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-6"></div>
                        <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-6"></div>
                      </div>
                    </div>
                  </a>
                </div>
                <div>
                  <a data-theme-color="theme-7"
                    class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                    <div class="h-full overflow-hidden rounded-full">
                      <div class="-mx-2 flex h-full items-center gap-1">
                        <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-7"></div>
                        <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-7"></div>
                      </div>
                    </div>
                  </a>
                </div>
                <div>
                  <a data-theme-color="theme-8"
                    class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                    <div class="h-full overflow-hidden rounded-full">
                      <div class="-mx-2 flex h-full items-center gap-1">
                        <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-8"></div>
                        <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-8"></div>
                      </div>
                    </div>
                  </a>
                </div>
                <div>
                  <a data-theme-color="theme-9"
                    class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                    <div class="h-full overflow-hidden rounded-full">
                      <div class="-mx-2 flex h-full items-center gap-1">
                        <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-9"></div>
                        <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-9"></div>
                      </div>
                    </div>
                  </a>
                </div>
                <div>
                  <a data-theme-color="theme-10"
                    class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                    <div class="h-full overflow-hidden rounded-full">
                      <div class="-mx-2 flex h-full items-center gap-1">
                        <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-10"></div>
                        <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-10"></div>
                      </div>
                    </div>
                  </a>
                </div>
                <div>
                  <a data-theme-color="theme-11"
                    class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                    <div class="h-full overflow-hidden rounded-full">
                      <div class="-mx-2 flex h-full items-center gap-1">
                        <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-11"></div>
                        <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-11"></div>
                      </div>
                    </div>
                  </a>
                </div>
                <div>
                  <a data-theme-color="theme-12"
                    class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                    <div class="h-full overflow-hidden rounded-full">
                      <div class="-mx-2 flex h-full items-center gap-1">
                        <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-12"></div>
                        <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-12"></div>
                      </div>
                    </div>
                  </a>
                </div>
                <div>
                  <a data-theme-color="theme-13"
                    class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                    <div class="h-full overflow-hidden rounded-full">
                      <div class="-mx-2 flex h-full items-center gap-1">
                        <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-13"></div>
                        <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-13"></div>
                      </div>
                    </div>
                  </a>
                </div>
                <div>
                  <a data-theme-color="theme-14"
                    class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                    <div class="h-full overflow-hidden rounded-full">
                      <div class="-mx-2 flex h-full items-center gap-1">
                        <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-14"></div>
                        <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-14"></div>
                      </div>
                    </div>
                  </a>
                </div>
                <div>
                  <a data-theme-color="theme-15"
                    class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                    <div class="h-full overflow-hidden rounded-full">
                      <div class="-mx-2 flex h-full items-center gap-1">
                        <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-15"></div>
                        <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-15"></div>
                      </div>
                    </div>
                  </a>
                </div>
                <div>
                  <a data-theme-color="theme-16"
                    class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                    <div class="h-full overflow-hidden rounded-full">
                      <div class="-mx-2 flex h-full items-center gap-1">
                        <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-16"></div>
                        <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-16"></div>
                      </div>
                    </div>
                  </a>
                </div>
                <div>
                  <a data-theme-color="theme-17"
                    class="h-12 cursor-pointer bg-slate-50 box rounded-full p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                    <div class="h-full overflow-hidden rounded-full">
                      <div class="-mx-2 flex h-full items-center gap-1">
                        <div class="w-1/2 h-[140%] bg-theme-1 rotate-12 theme-17"></div>
                        <div class="w-1/2 h-[140%] bg-theme-2 rotate-12 theme-17"></div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class="fixed bottom-0 right-0 z-50 mb-5 mr-5 flex h-14 w-14 cursor-pointer items-center justify-center rounded-full bg-theme-1 text-white shadow-lg"
      data-tw-toggle="modal" data-tw-target="#theme-switcher">
      <i data-tw-merge="" data-lucide="settings" class="stroke-[1] w-5 h-5 animate-spin"></i>
    </div>
  </div>
  <div
    class="container grid grid-cols-12 px-5 py-10 sm:px-10 sm:py-14 md:px-36 lg:h-screen lg:max-w-[1550px] lg:py-0 lg:pl-14 lg:pr-12 xl:px-24 2xl:max-w-[1750px]">
    <div
      class="relative z-50 h-full col-span-12 p-7 sm:p-14 bg-white rounded-2xl lg:bg-transparent lg:pr-10 lg:col-span-5 xl:pr-24 2xl:col-span-4 lg:p-0 before:content-[''] before:absolute before:inset-0 before:-mb-3.5 before:bg-white/40 before:rounded-2xl before:mx-5">
      <div class="relative z-10 flex flex-col justify-center w-full h-full py-2 lg:py-32">
        <div class="flex gap-2">
          <div class="flex h-[55px] w-[55px] items-center justify-center rounded-[0.8rem] border border-primary/30">
            <div
              class="relative flex h-[50px] w-[50px] items-center justify-center rounded-[0.6rem] bg-white bg-gradient-to-b from-theme-1/90 to-theme-2/90">
              <div class="relative h-[26px] w-[26px] -rotate-45 [&_div]:bg-white">
                <div class="absolute inset-y-0 left-0 my-auto h-[75%] w-[20%] rounded-full opacity-50">
                </div>
                <div class="absolute inset-0 m-auto h-[120%] w-[20%] rounded-full"></div>
                <div class="absolute inset-y-0 right-0 my-auto h-[75%] w-[20%] rounded-full opacity-50">
                </div>
              </div>
            </div>
          </div>
          <img src="{{ asset('landing/assets/img/logo/fav2.png') }}" alt="">
        </div>
        @yield('content')
      </div>
    </div>
  </div>
  <div
    class="container fixed inset-0 grid h-screen w-screen grid-cols-12 pl-14 pr-12 lg:max-w-[1550px] xl:px-24 2xl:max-w-[1750px]">
    <div
      class="relative h-screen col-span-12 lg:col-span-5 2xl:col-span-4 z-20 after:bg-white after:hidden after:lg:block after:content-[''] after:absolute after:right-0 after:inset-y-0 after:bg-gradient-to-b after:from-white after:to-slate-100/80 after:w-[800%] after:rounded-[0_1.2rem_1.2rem_0/0_1.7rem_1.7rem_0] before:content-[''] before:hidden before:lg:block before:absolute before:right-0 before:inset-y-0 before:my-6 before:bg-gradient-to-b before:from-white/10 before:to-slate-50/10 before:bg-white/50 before:w-[800%] before:-mr-4 before:rounded-[0_1.2rem_1.2rem_0/0_1.7rem_1.7rem_0]">
    </div>
    <div
      class="h-full col-span-7 2xl:col-span-8 lg:relative before:content-[''] before:absolute before:lg:-ml-10 before:left-0 before:inset-y-0 before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:w-screen before:lg:w-[800%] after:content-[''] after:absolute after:inset-y-0 after:left-0 after:w-screen after:lg:w-[800%] after:bg-texture-white after:bg-fixed after:bg-center after:lg:bg-[25rem_-25rem] after:bg-no-repeat">
      <div class="sticky top-0 z-10 flex-col justify-center hidden h-screen ml-16 lg:flex xl:ml-28 2xl:ml-36">
        <div class="text-[2.6rem] font-medium leading-[1.4] text-white xl:text-5xl xl:leading-[1.2]">
          Kuasai Web Development <br> dari Dasar hingga Framework Modern
        </div>
        <div class="mt-5 text-base leading-relaxed text-white/70 xl:text-lg">
          Temukan potensi Anda dalam pengembangan web dengan Turbo Main. Mulai dari dasar-dasar HTML, CSS, dan JavaScript hingga penggunaan framework modern. Bergabunglah dengan kami hari ini dan jadilah ahli dalam membangun website yang menarik dan fungsional.
        </div>
        <div class="flex flex-col gap-3 mt-10 xl:flex-row xl:items-center">
          <div class="flex items-center">
            <div class="image-fit zoom-in h-9 w-9 2xl:h-11 2xl:w-11">
              <img data-placement="top" title="Cate Blanchett"
                src="{{ asset('') }}assets/dist/images/users/user8-50x50.jpg"
                alt="Tailwise - Admin Dashboard Template"
                class="tooltip cursor-pointer rounded-full border-[3px] border-white/50">
            </div>
            <div class="-ml-3 image-fit zoom-in h-9 w-9 2xl:h-11 2xl:w-11">
              <img data-placement="top" title="Julia Roberts"
                src="{{ asset('') }}assets/dist/images/users/user10-50x50.jpg"
                alt="Tailwise - Admin Dashboard Template"
                class="tooltip cursor-pointer rounded-full border-[3px] border-white/50">
            </div>
            <div class="-ml-3 image-fit zoom-in h-9 w-9 2xl:h-11 2xl:w-11">
              <img data-placement="top" title="Angelina Jolie"
                src="{{ asset('') }}assets/dist/images/users/user4-50x50.jpg"
                alt="Tailwise - Admin Dashboard Template"
                class="tooltip cursor-pointer rounded-full border-[3px] border-white/50">
            </div>
            <div class="-ml-3 image-fit zoom-in h-9 w-9 2xl:h-11 2xl:w-11">
              <img data-placement="top" title="Leonardo DiCaprio"
                src="{{ asset('') }}assets/dist/images/users/user3-50x50.jpg"
                alt="Tailwise - Admin Dashboard Template"
                class="tooltip cursor-pointer rounded-full border-[3px] border-white/50">
            </div>
          </div>
          <div class="text-base text-white/70 xl:ml-2 2xl:ml-3">
            Lebih dari 100+ orang telah bergabung! Perjalanan Anda dimulai di sini.
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- BEGIN: Vendor JS Assets-->
@include('components.script')
  <!-- BEGIN: Pages, layouts, components JS Assets-->
  <!-- END: Pages, layouts, components JS Assets-->
</body>



</html>
