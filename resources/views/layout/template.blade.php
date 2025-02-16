<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="opacity-0" lang="en"><!-- BEGIN: Head -->

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

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
    <title>Turbo Main » {{ $title }}</title>
    <!-- BEGIN: CSS Assets-->
    @include('components.style')
    <!-- END: CSS Assets-->
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
                                    <a href="echo-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="{{ asset('assets') }}/dist/images/themes/echo.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        echo
                                    </div>
                                </div>
                                <div>
                                    <a href="hurricane-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="{{ asset('assets') }}/dist/images/themes/hurricane.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        hurricane
                                    </div>
                                </div>
                                <div>
                                    <a href="ravage-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="{{ asset('assets') }}/dist/images/themes/ravage.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        ravage
                                    </div>
                                </div>
                                <div>
                                    <a href="hook-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="{{ asset('assets') }}/dist/images/themes/hook.png"
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
                                            <img class="h-full w-full" src="{{ asset('assets') }}/dist/images/themes/razor.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        razor
                                    </div>
                                </div>
                                <div>
                                    <a href="havoc-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="{{ asset('assets') }}/dist/images/themes/havoc.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        havoc
                                    </div>
                                </div>
                                <div>
                                    <a href="dagger-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="{{ asset('assets') }}/dist/images/themes/dagger.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        dagger
                                    </div>
                                </div>
                                <div>
                                    <a href="shuriken-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="{{ asset('assets') }}/dist/images/themes/shuriken.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        shuriken
                                    </div>
                                </div>
                                <div>
                                    <a href="raze-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="{{ asset('assets') }}/dist/images/themes/raze.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        raze
                                    </div>
                                </div>
                                <div>
                                    <a href="exort-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="{{ asset('assets') }}/dist/images/themes/exort.png"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        exort
                                    </div>
                                </div>
                                <div>
                                    <a href="viper-dashboard-overview-1.html"
                                        class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="h-full w-full overflow-hidden rounded-md">
                                            <img class="h-full w-full" src="{{ asset('assets') }}/dist/images/themes/viper.png"
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
        <div class="fixed bottom-0 right-0 z-50 mb-5 mr-5 flex h-14 w-14 cursor-pointer items-center justify-center rounded-full bg-theme-1 text-white shadow-lg"
            data-tw-toggle="modal" data-tw-target="#theme-switcher">
            <i data-tw-merge="" data-lucide="settings" class="stroke-[1] w-5 h-5 animate-spin"></i>
        </div>
    </div>
    <div
        class="razor background min-h-screen before:content-[''] before:bg-gradient-to-b before:from-slate-100 before:to-slate-50 before:h-screen before:w-full before:fixed before:top-0 after:content-[''] after:fixed after:inset-0 after:bg-[radial-gradient(rgb(0_0_0_/_10%)_1px,_transparent_0)] after:bg-[length:25px_25px]">
        <div
            class="[&.loading-page--before-hide]:h-screen [&.loading-page--before-hide]:relative loading-page loading-page--before-hide [&.loading-page--before-hide]:before:block [&.loading-page--hide]:before:opacity-0 before:content-[''] before:transition-opacity before:duration-300 before:hidden before:inset-0 before:h-screen before:w-screen before:fixed before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:z-[60] [&.loading-page--before-hide]:after:block [&.loading-page--hide]:after:opacity-0 after:content-[''] after:transition-opacity after:duration-300 after:hidden after:h-16 after:w-16 after:animate-pulse after:fixed after:opacity-50 after:inset-0 after:m-auto after:bg-loading-puff after:bg-cover after:z-[61]">
            <div
                class="xl:ml-0 shadow-xl transition-[margin] duration-300 xl:shadow-none fixed top-0 left-0 z-50 side-menu group inset-y-0 xl:py-3.5 xl:pl-3.5 after:content-[''] after:fixed after:inset-0 after:bg-black/80 after:xl:hidden side-menu--collapsed [&.side-menu--mobile-menu-open]:ml-0 [&.side-menu--mobile-menu-open]:after:block -ml-[275px] after:hidden">
                <div
                    class="close-mobile-menu fixed ml-[275px] w-10 h-10 items-center justify-center xl:hidden z-50 [&.close-mobile-menu--mobile-menu-open]:flex hidden">
                    <a class="ml-5 mt-5" href="#">
                        <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-8 w-8 text-white"></i>
                    </a>
                </div>
                @include('components.sidebar')
                <div
                    class="fixed h-[65px] transition-[margin] duration-100 xl:ml-[275px] group-[.side-menu--collapsed]:xl:ml-[90px] mt-3.5 inset-x-0 top-0 before:content-[''] before:mx-5 before:absolute before:top-0 before:inset-x-0 before:-mt-[15px] before:h-[20px] before:backdrop-blur">
                    <div
                        class="box group absolute left-0 right-0 mx-5 h-full transition-colors duration-200 ease-in-out before:absolute before:inset-x-4 before:top-0 before:z-[-1] before:mx-auto before:mt-3 before:h-full before:rounded-lg before:border before:border-slate-200 before:bg-slate-50 before:shadow-sm before:content-[''] before:dark:border-darkmode-500/60 before:dark:bg-darkmode-600/70 xl:left-3.5">
                        <div
                            class="flex h-full w-full items-center px-5 transition-[padding] duration-300 ease-in-out">
                            <div class="flex items-center gap-1 xl:hidden">
                                <a class="open-mobile-menu rounded-full p-2 hover:bg-slate-100" href="#">
                                    <i data-tw-merge="" data-lucide="align-justify"
                                        class="stroke-[1] h-[18px] w-[18px]"></i>
                                </a>
                                <a class="rounded-full p-2 hover:bg-slate-100" data-tw-toggle="modal"
                                    data-tw-target="#quick-search" href="javascript:;">
                                    <i data-tw-merge="" data-lucide="search"
                                        class="stroke-[1] h-[18px] w-[18px]"></i>
                                </a>
                            </div>
                            <!-- BEGIN: Breadcrumb -->
                            @yield('breadcrumb')
                            <!-- END: Breadcrumb -->
                            <!-- BEGIN: Search -->
                            <div class="relative hidden flex-1 justify-center xl:flex" data-tw-toggle="modal"
                                data-tw-target="#quick-search">
                                <div
                                    class="flex w-[350px] cursor-pointer items-center rounded-[0.5rem] border bg-slate-50 px-3.5 py-2 text-slate-400 transition-colors duration-300 hover:bg-slate-100 hover:duration-100">
                                    <i data-tw-merge="" data-lucide="search"
                                        class="stroke-[1] h-[18px] w-[18px]"></i>
                                    <div class="ml-2.5 mr-auto">Quick search...</div>
                                    <div>⌘K</div>
                                </div>
                            </div>
                            <div id="quick-search" aria-hidden="true" tabindex="-1"
                                class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 overflow-y-hidden z-[60] [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.1s]">
                                <div
                                    class="relative mx-auto my-2 w-[95%] scale-95 transition-transform group-[.show]:scale-100 sm:mt-40 sm:w-[600px] lg:w-[700px]">
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex w-12 items-center justify-center">
                                            <i data-tw-merge="" data-lucide="search"
                                                class="stroke-[1] w-5 h-5 -mr-1.5 text-slate-500"></i>
                                        </div>
                                        <input data-tw-merge="" type="text" placeholder="Quick search..."
                                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full border-slate-200 placeholder:text-slate-400/90 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 rounded-lg border-0 py-3.5 pl-12 pr-14 text-base shadow-lg focus:ring-0">
                                        <div class="absolute inset-y-0 right-0 flex w-14 items-center">
                                            <div
                                                class="mr-auto rounded-[0.4rem] border bg-slate-100 px-2 py-1 text-xs text-slate-500/80">
                                                ESC
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="global-search global-search--show-result group relative z-10 mt-1 max-h-[468px] overflow-y-auto rounded-lg bg-white pb-1 shadow-lg sm:max-h-[615px]">
                                        <div
                                            class="flex flex-col items-center justify-center pb-28 pt-20 group-[.global-search--show-result]:hidden">
                                            <i data-tw-merge="" data-lucide="search-x"
                                                class="h-20 w-20 fill-theme-1/5 stroke-[0.5] text-theme-1/20"></i>
                                            <div class="mt-5 text-xl font-medium">
                                                No result found
                                            </div>
                                            <div class="mt-3 w-2/3 text-center leading-relaxed text-slate-500">
                                                No results found for
                                                <span class="global-search__keyword font-medium italic"></span>
                                                . Please try a different search term or check your
                                                spelling.
                                            </div>
                                        </div>
                                        <div class="hidden group-[.global-search--show-result]:block">
                                            <div class="px-5 py-4">
                                                <div class="flex items-center">
                                                    <div class="text-xs uppercase text-slate-500">
                                                        Start your search here...
                                                    </div>
                                                </div>
                                                <div class="mt-3.5 flex flex-wrap gap-2">
                                                    <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50"
                                                        href="#">
                                                        <i data-tw-merge="" data-lucide="users2"
                                                            class="h-4 w-4 stroke-[1.3]"></i>
                                                        Users
                                                    </a>
                                                    <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50"
                                                        href="#">
                                                        <i data-tw-merge="" data-lucide="building2"
                                                            class="h-4 w-4 stroke-[1.3]"></i>
                                                        Departments
                                                    </a>
                                                    <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50"
                                                        href="#">
                                                        <i data-tw-merge="" data-lucide="kanban-square"
                                                            class="h-4 w-4 stroke-[1.3]"></i>
                                                        Products
                                                    </a>
                                                    <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50"
                                                        href="#">
                                                        <i data-tw-merge="" data-lucide="mail-check"
                                                            class="h-4 w-4 stroke-[1.3]"></i>
                                                        Mails
                                                    </a>
                                                    <div data-tw-merge="" data-tw-placement="bottom-end"
                                                        class="dropdown relative"><a data-tw-toggle="dropdown"
                                                            aria-expanded="false" href="javascript:;"
                                                            class="cursor-pointer flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50">More
                                                            <i data-tw-merge="" data-lucide="chevron-down"
                                                                class="-ml-0.5 h-4 w-4 stroke-[1.3]"></i>
                                                        </a>
                                                        <div data-transition="" data-selector=".show"
                                                            data-enter="transition-all ease-linear duration-150"
                                                            data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                            data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                            data-leave="transition-all ease-linear duration-150"
                                                            data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                            data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                            class="dropdown-menu absolute z-[9999] hidden">
                                                            <div data-tw-merge=""
                                                                class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                <a
                                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                        data-tw-merge="" data-lucide="map"
                                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                    Locations</a>
                                                                <a
                                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                        data-tw-merge="" data-lucide="file-check"
                                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                    Projects</a>
                                                                <a
                                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                        data-tw-merge="" data-lucide="printer"
                                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                    Devices</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="border-t border-dashed px-5 py-4">
                                                <div class="flex items-center">
                                                    <div class="text-xs uppercase text-slate-500">
                                                        Users
                                                    </div>
                                                    <a class="ml-auto text-xs text-slate-500" href="#">
                                                        See All
                                                    </a>
                                                </div>
                                                <div class="mt-3.5 flex flex-col gap-1">
                                                    <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                                        href="#">
                                                        <div
                                                            class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/users/user2-50x50.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                        <div class="truncate font-medium">
                                                            Meryl Streep
                                                        </div>
                                                        <div class="hidden text-slate-500 sm:block">
                                                            Los Angeles, USA
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                                        href="#">
                                                        <div
                                                            class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/users/user6-50x50.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                        <div class="truncate font-medium">
                                                            Jennifer Lawrence
                                                        </div>
                                                        <div class="hidden text-slate-500 sm:block">
                                                            Miami, USA
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                                        href="#">
                                                        <div
                                                            class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                        <div class="truncate font-medium">
                                                            Tom Hanks
                                                        </div>
                                                        <div class="hidden text-slate-500 sm:block">
                                                            New York, USA
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="border-t border-dashed px-5 py-4">
                                                <div class="flex items-center">
                                                    <div class="text-xs uppercase text-slate-500">
                                                        Departments
                                                    </div>
                                                    <a class="ml-auto text-xs text-slate-500" href="#">
                                                        See All
                                                    </a>
                                                </div>
                                                <div class="mt-3.5 flex flex-col gap-1">
                                                    <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                                        href="#">
                                                        <div
                                                            class="zoom-in box flex h-6 w-6 items-center justify-center overflow-hidden rounded-md border border-theme-1/10 bg-theme-1/10">
                                                            <i data-tw-merge="" data-lucide="hotel"
                                                                class="h-3.5 w-3.5 stroke-[1.3] text-theme-1"></i>
                                                        </div>
                                                        <div class="truncate font-medium">
                                                            Customer Support
                                                        </div>
                                                        <div class="hidden text-slate-500 sm:block">
                                                            Puerto Rico
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                                        href="#">
                                                        <div
                                                            class="zoom-in box flex h-6 w-6 items-center justify-center overflow-hidden rounded-md border border-theme-1/10 bg-theme-1/10">
                                                            <i data-tw-merge="" data-lucide="store"
                                                                class="h-3.5 w-3.5 stroke-[1.3] text-theme-1"></i>
                                                        </div>
                                                        <div class="truncate font-medium">
                                                            Engineering
                                                        </div>
                                                        <div class="hidden text-slate-500 sm:block">
                                                            Indonesia
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                                        href="#">
                                                        <div
                                                            class="zoom-in box flex h-6 w-6 items-center justify-center overflow-hidden rounded-md border border-theme-1/10 bg-theme-1/10">
                                                            <i data-tw-merge="" data-lucide="store"
                                                                class="h-3.5 w-3.5 stroke-[1.3] text-theme-1"></i>
                                                        </div>
                                                        <div class="truncate font-medium">
                                                            Sales
                                                        </div>
                                                        <div class="hidden text-slate-500 sm:block">
                                                            Slovakia
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="border-t border-dashed px-5 py-4">
                                                <div class="flex items-center">
                                                    <div class="text-xs uppercase text-slate-500">
                                                        Products
                                                    </div>
                                                    <a class="ml-auto text-xs text-slate-500" href="#">
                                                        See All
                                                    </a>
                                                </div>
                                                <div class="mt-3.5 flex flex-col gap-1">
                                                    <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                                        href="#">
                                                        <div
                                                            class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/products/product10-400x400.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                        <div class="truncate font-medium">
                                                            Wireless Earbuds with Mic
                                                        </div>
                                                        <div class="hidden text-slate-500 sm:block">
                                                            Jewelry
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                                        href="#">
                                                        <div
                                                            class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/products/product4-400x400.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                        <div class="truncate font-medium">
                                                            Smart Home Security Camera
                                                        </div>
                                                        <div class="hidden text-slate-500 sm:block">
                                                            Furniture
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                                        href="#">
                                                        <div
                                                            class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/products/product5-400x400.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                        <div class="truncate font-medium">
                                                            High-Performance Laptop
                                                        </div>
                                                        <div class="hidden text-slate-500 sm:block">
                                                            Toys & Games
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Search -->
                            <!-- BEGIN: Notification & User Menu -->
                            <div class="flex flex-1 items-center">
                                <div class="ml-auto flex items-center gap-1">
                                    <a class="rounded-full p-2 hover:bg-slate-100" data-tw-toggle="modal"
                                        data-tw-target="#activities-panel" href="javascript:;">
                                        <i data-tw-merge="" data-lucide="layout-grid"
                                            class="stroke-[1] h-[18px] w-[18px]"></i>
                                    </a>
                                    <a class="request-full-screen rounded-full p-2 hover:bg-slate-100"
                                        href="javascript:;">
                                        <i data-tw-merge="" data-lucide="expand"
                                            class="stroke-[1] h-[18px] w-[18px]"></i>
                                    </a>
                                    <a class="rounded-full p-2 hover:bg-slate-100" data-tw-toggle="modal"
                                        data-tw-target="#notifications-panel" href="javascript:;">
                                        <i data-tw-merge="" data-lucide="bell"
                                            class="stroke-[1] h-[18px] w-[18px]"></i>
                                    </a>
                                </div>
                                <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative ml-5">
                                    <button data-tw-toggle="dropdown" aria-expanded="false"
                                        class="cursor-pointer image-fit h-[36px] w-[36px] overflow-hidden rounded-full border-[3px] border-slate-200/70"><img
                                            src="{{ asset('img/profile/'.(auth()->user()->profile->foto == 'default.png' ? '/10302971.png' : auth()->user()->profile->foto   )) }}"
                                            alt="Turbo Main">
                                    </button>
                                    <div data-transition="" data-selector=".show"
                                        data-enter="transition-all ease-linear duration-150"
                                        data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                        data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                        data-leave="transition-all ease-linear duration-150"
                                        data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                        data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                        class="dropdown-menu absolute z-[9999] hidden">
                                        <div data-tw-merge=""
                                            class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 mt-1 w-56">
                                            <a href="{{ route('profile') }}"
                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                    data-tw-merge="" data-lucide="users"
                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                Profile Info</a>
                                            <a href="{{ route('logout') }}"
                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                    data-tw-merge="" data-lucide="power"
                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="activities-panel"
                                    class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                                    <div data-tw-merge=""
                                        class="ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px] w-72 rounded-[0.75rem_0_0_0.75rem/1.1rem_0_0_1.1rem]">
                                        <a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14"
                                            data-tw-dismiss="modal" href="javascript:;">
                                            <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-8 w-8"></i>
                                        </a>
                                        <div data-tw-merge=""
                                            class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-6 py-5">
                                            <h2 class="mr-auto text-base font-medium">Latest Activities</h2>
                                        </div>
                                        <div data-tw-merge="" class="overflow-y-auto flex-1 p-0">
                                            <div class="flex flex-col gap-3.5 px-5 py-3">
                                                <div
                                                    class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                    <div
                                                        class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                        <div
                                                            class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                            <a class="font-medium text-primary" href="#">
                                                                Received a friend request
                                                            </a>
                                                            <div
                                                                class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                                Friend request from John
                                                                <span
                                                                    class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 primary">
                                                                    <span
                                                                        class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                    <span class="-mt-px">New</span>
                                                                </span>
                                                            </div>
                                                            <div
                                                                class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-[80%]">
                                                                <div
                                                                    class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-20">
                                                                        <img src="{{ asset('assets') }}/dist/images/projects/project1-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-20">
                                                                        <img src="{{ asset('assets') }}/dist/images/projects/project8-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-20">
                                                                        <img src="{{ asset('assets') }}/dist/images/projects/project5-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Sun Aug 2022
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                        <div
                                                            class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                            <a class="font-medium text-primary" href="#">
                                                                Received 5 new emails
                                                            </a>
                                                            <div
                                                                class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                                Inbox updates
                                                                <span
                                                                    class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 warning">
                                                                    <span
                                                                        class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                    <span class="-mt-px">Info</span>
                                                                </span>
                                                            </div>
                                                            <div class="my-3.5 grid grid-cols-1 gap-4">
                                                                <div
                                                                    class="flex items-center rounded-[0.6rem] border border-slate-200/80 bg-slate-50/70 py-4 pl-5 pr-2.5">
                                                                    <div class="hidden w-10 sm:block">
                                                                        <div
                                                                            class="relative block bg-center bg-no-repeat bg-contain before:content-[''] before:pt-[100%] before:w-full before:block bg-file-icon-directory">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mr-auto sm:ml-3.5">
                                                                        <div
                                                                            class="max-w-[8rem] truncate font-medium text-primary">
                                                                            presentation1.pptx
                                                                        </div>
                                                                        <div class="mt-1 text-xs text-slate-500">
                                                                            5.2MB
                                                                        </div>
                                                                    </div>
                                                                    <div data-tw-merge=""
                                                                        data-tw-placement="bottom-end"
                                                                        class="dropdown relative"><button
                                                                            data-tw-toggle="dropdown"
                                                                            aria-expanded="false"
                                                                            class="cursor-pointer h-5 w-5 text-slate-500"><i
                                                                                data-tw-merge=""
                                                                                data-lucide="more-vertical"
                                                                                class="stroke-[1] h-4 w-4"></i>
                                                                        </button>
                                                                        <div data-transition=""
                                                                            data-selector=".show"
                                                                            data-enter="transition-all ease-linear duration-150"
                                                                            data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                            data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                            data-leave="transition-all ease-linear duration-150"
                                                                            data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                            data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                            class="dropdown-menu absolute z-[9999] hidden">
                                                                            <div data-tw-merge=""
                                                                                class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                                <a
                                                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                        data-tw-merge=""
                                                                                        data-lucide="copy"
                                                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Copy Link</a>
                                                                                <a
                                                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                        data-tw-merge=""
                                                                                        data-lucide="trash"
                                                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="flex items-center rounded-[0.6rem] border border-slate-200/80 bg-slate-50/70 py-4 pl-5 pr-2.5">
                                                                    <div class="hidden w-10 sm:block">
                                                                        <div
                                                                            class="relative block bg-center bg-no-repeat bg-contain before:content-[''] before:pt-[100%] before:w-full before:block bg-file-icon-directory">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mr-auto sm:ml-3.5">
                                                                        <div
                                                                            class="max-w-[8rem] truncate font-medium text-primary">
                                                                            presentation2.ppt
                                                                        </div>
                                                                        <div class="mt-1 text-xs text-slate-500">
                                                                            4.5MB
                                                                        </div>
                                                                    </div>
                                                                    <div data-tw-merge=""
                                                                        data-tw-placement="bottom-end"
                                                                        class="dropdown relative"><button
                                                                            data-tw-toggle="dropdown"
                                                                            aria-expanded="false"
                                                                            class="cursor-pointer h-5 w-5 text-slate-500"><i
                                                                                data-tw-merge=""
                                                                                data-lucide="more-vertical"
                                                                                class="stroke-[1] h-4 w-4"></i>
                                                                        </button>
                                                                        <div data-transition=""
                                                                            data-selector=".show"
                                                                            data-enter="transition-all ease-linear duration-150"
                                                                            data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                            data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                            data-leave="transition-all ease-linear duration-150"
                                                                            data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                            data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                            class="dropdown-menu absolute z-[9999] hidden">
                                                                            <div data-tw-merge=""
                                                                                class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                                <a
                                                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                        data-tw-merge=""
                                                                                        data-lucide="copy"
                                                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Copy Link</a>
                                                                                <a
                                                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                        data-tw-merge=""
                                                                                        data-lucide="trash"
                                                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Sun Jul 2022
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                        <div
                                                            class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                            <a class="font-medium text-primary" href="#">
                                                                Updated profile picture
                                                            </a>
                                                            <div
                                                                class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                                Changed profile photo
                                                                <span
                                                                    class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 primary">
                                                                    <span
                                                                        class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                    <span class="-mt-px">Success</span>
                                                                </span>
                                                            </div>
                                                            <div
                                                                class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-[80%]">
                                                                <div
                                                                    class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-20">
                                                                        <img src="{{ asset('assets') }}/dist/images/projects/project2-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-20">
                                                                        <img src="{{ asset('assets') }}/dist/images/projects/project10-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-20">
                                                                        <img src="{{ asset('assets') }}/dist/images/projects/project3-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Sat Jul 2022
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                        <div
                                                            class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                            <a class="font-medium text-primary" href="#">
                                                                Uploaded video files
                                                            </a>
                                                            <div
                                                                class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                                Shared video tutorials
                                                                <span
                                                                    class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 info">
                                                                    <span
                                                                        class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                    <span class="-mt-px">Completed</span>
                                                                </span>
                                                            </div>
                                                            <div class="my-3.5 grid grid-cols-1 gap-4">
                                                                <div
                                                                    class="flex items-center rounded-[0.6rem] border border-slate-200/80 bg-slate-50/70 py-4 pl-5 pr-2.5">
                                                                    <div class="hidden w-10 sm:block">
                                                                        <div
                                                                            class="relative block bg-center bg-no-repeat bg-contain before:content-[''] before:pt-[100%] before:w-full before:block bg-file-icon-directory">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mr-auto sm:ml-3.5">
                                                                        <div
                                                                            class="max-w-[8rem] truncate font-medium text-primary">
                                                                            video1.mp4
                                                                        </div>
                                                                        <div class="mt-1 text-xs text-slate-500">
                                                                            15MB
                                                                        </div>
                                                                    </div>
                                                                    <div data-tw-merge=""
                                                                        data-tw-placement="bottom-end"
                                                                        class="dropdown relative"><button
                                                                            data-tw-toggle="dropdown"
                                                                            aria-expanded="false"
                                                                            class="cursor-pointer h-5 w-5 text-slate-500"><i
                                                                                data-tw-merge=""
                                                                                data-lucide="more-vertical"
                                                                                class="stroke-[1] h-4 w-4"></i>
                                                                        </button>
                                                                        <div data-transition=""
                                                                            data-selector=".show"
                                                                            data-enter="transition-all ease-linear duration-150"
                                                                            data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                            data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                            data-leave="transition-all ease-linear duration-150"
                                                                            data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                            data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                            class="dropdown-menu absolute z-[9999] hidden">
                                                                            <div data-tw-merge=""
                                                                                class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                                <a
                                                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                        data-tw-merge=""
                                                                                        data-lucide="copy"
                                                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Copy Link</a>
                                                                                <a
                                                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                        data-tw-merge=""
                                                                                        data-lucide="trash"
                                                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="flex items-center rounded-[0.6rem] border border-slate-200/80 bg-slate-50/70 py-4 pl-5 pr-2.5">
                                                                    <div class="hidden w-10 sm:block">
                                                                        <div
                                                                            class="relative block bg-center bg-no-repeat bg-contain before:content-[''] before:pt-[100%] before:w-full before:block bg-file-icon-directory">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mr-auto sm:ml-3.5">
                                                                        <div
                                                                            class="max-w-[8rem] truncate font-medium text-primary">
                                                                            video2.mov
                                                                        </div>
                                                                        <div class="mt-1 text-xs text-slate-500">
                                                                            12.5MB
                                                                        </div>
                                                                    </div>
                                                                    <div data-tw-merge=""
                                                                        data-tw-placement="bottom-end"
                                                                        class="dropdown relative"><button
                                                                            data-tw-toggle="dropdown"
                                                                            aria-expanded="false"
                                                                            class="cursor-pointer h-5 w-5 text-slate-500"><i
                                                                                data-tw-merge=""
                                                                                data-lucide="more-vertical"
                                                                                class="stroke-[1] h-4 w-4"></i>
                                                                        </button>
                                                                        <div data-transition=""
                                                                            data-selector=".show"
                                                                            data-enter="transition-all ease-linear duration-150"
                                                                            data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                            data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                            data-leave="transition-all ease-linear duration-150"
                                                                            data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                            data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                            class="dropdown-menu absolute z-[9999] hidden">
                                                                            <div data-tw-merge=""
                                                                                class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                                <a
                                                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                        data-tw-merge=""
                                                                                        data-lucide="copy"
                                                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Copy Link</a>
                                                                                <a
                                                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                        data-tw-merge=""
                                                                                        data-lucide="trash"
                                                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Thu May 2021
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                        <div
                                                            class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                            <a class="font-medium text-primary" href="#">
                                                                Uploaded presentations
                                                            </a>
                                                            <div
                                                                class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                                Added slides for the team meeting
                                                                <span
                                                                    class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 info">
                                                                    <span
                                                                        class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                    <span class="-mt-px">Completed</span>
                                                                </span>
                                                            </div>
                                                            <div class="my-3.5 grid grid-cols-1 gap-4">
                                                                <div
                                                                    class="flex items-center rounded-[0.6rem] border border-slate-200/80 bg-slate-50/70 py-4 pl-5 pr-2.5">
                                                                    <div class="hidden w-10 sm:block">
                                                                        <div
                                                                            class="relative block bg-center bg-no-repeat bg-contain before:content-[''] before:pt-[100%] before:w-full before:block bg-file-icon-directory">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mr-auto sm:ml-3.5">
                                                                        <div
                                                                            class="max-w-[8rem] truncate font-medium text-primary">
                                                                            presentation1.pptx
                                                                        </div>
                                                                        <div class="mt-1 text-xs text-slate-500">
                                                                            5.2MB
                                                                        </div>
                                                                    </div>
                                                                    <div data-tw-merge=""
                                                                        data-tw-placement="bottom-end"
                                                                        class="dropdown relative"><button
                                                                            data-tw-toggle="dropdown"
                                                                            aria-expanded="false"
                                                                            class="cursor-pointer h-5 w-5 text-slate-500"><i
                                                                                data-tw-merge=""
                                                                                data-lucide="more-vertical"
                                                                                class="stroke-[1] h-4 w-4"></i>
                                                                        </button>
                                                                        <div data-transition=""
                                                                            data-selector=".show"
                                                                            data-enter="transition-all ease-linear duration-150"
                                                                            data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                            data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                            data-leave="transition-all ease-linear duration-150"
                                                                            data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                            data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                            class="dropdown-menu absolute z-[9999] hidden">
                                                                            <div data-tw-merge=""
                                                                                class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                                <a
                                                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                        data-tw-merge=""
                                                                                        data-lucide="copy"
                                                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Copy Link</a>
                                                                                <a
                                                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                        data-tw-merge=""
                                                                                        data-lucide="trash"
                                                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="flex items-center rounded-[0.6rem] border border-slate-200/80 bg-slate-50/70 py-4 pl-5 pr-2.5">
                                                                    <div class="hidden w-10 sm:block">
                                                                        <div
                                                                            class="relative block bg-center bg-no-repeat bg-contain before:content-[''] before:pt-[100%] before:w-full before:block bg-file-icon-directory">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mr-auto sm:ml-3.5">
                                                                        <div
                                                                            class="max-w-[8rem] truncate font-medium text-primary">
                                                                            presentation2.ppt
                                                                        </div>
                                                                        <div class="mt-1 text-xs text-slate-500">
                                                                            4.5MB
                                                                        </div>
                                                                    </div>
                                                                    <div data-tw-merge=""
                                                                        data-tw-placement="bottom-end"
                                                                        class="dropdown relative"><button
                                                                            data-tw-toggle="dropdown"
                                                                            aria-expanded="false"
                                                                            class="cursor-pointer h-5 w-5 text-slate-500"><i
                                                                                data-tw-merge=""
                                                                                data-lucide="more-vertical"
                                                                                class="stroke-[1] h-4 w-4"></i>
                                                                        </button>
                                                                        <div data-transition=""
                                                                            data-selector=".show"
                                                                            data-enter="transition-all ease-linear duration-150"
                                                                            data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                            data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                            data-leave="transition-all ease-linear duration-150"
                                                                            data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                            data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                            class="dropdown-menu absolute z-[9999] hidden">
                                                                            <div data-tw-merge=""
                                                                                class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                                <a
                                                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                        data-tw-merge=""
                                                                                        data-lucide="copy"
                                                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Copy Link</a>
                                                                                <a
                                                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                        data-tw-merge=""
                                                                                        data-lucide="trash"
                                                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                    Delete</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Sat Aug 2020
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div data-tw-backdrop="" aria-hidden="true" tabindex="-1"
                                    id="notifications-panel"
                                    class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                                    <div data-tw-merge=""
                                        class="ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px] w-72 rounded-[0.75rem_0_0_0.75rem/1.1rem_0_0_1.1rem]">
                                        <a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14"
                                            data-tw-dismiss="modal" href="javascript:;">
                                            <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-8 w-8"></i>
                                        </a>
                                        <div data-tw-merge=""
                                            class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-6 py-5">
                                            <h2 class="mr-auto text-base font-medium">Notifications</h2>
                                            <button data-tw-merge=""
                                                class="transition duration-200 border shadow-sm items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 hidden sm:flex"><i
                                                    data-tw-merge="" data-lucide="shield-check"
                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                Mark all as
                                                read</button>
                                        </div>
                                        <div data-tw-merge="" class="overflow-y-auto flex-1 p-0">
                                            <div class="flex flex-col gap-0.5 p-3">
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                    href="#">
                                                    <div>
                                                        <div
                                                            class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Uploaded a spreadsheet</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Added financial data for Q3
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Mon May 2022
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                    href="#">
                                                    <div>
                                                        <div
                                                            class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Updated profile picture</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Changed profile photo
                                                        </div>
                                                        <div
                                                            class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                                            <div
                                                                class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                <div
                                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="{{ asset('assets') }}/dist/images/projects/project8-400x400.jpg"
                                                                        alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div
                                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="{{ asset('assets') }}/dist/images/projects/project8-400x400.jpg"
                                                                        alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div
                                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="{{ asset('assets') }}/dist/images/projects/project5-400x400.jpg"
                                                                        alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Mon Jul 2021
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                    href="#">
                                                    <div>
                                                        <div
                                                            class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Received a friend request</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Friend request from John
                                                        </div>
                                                        <div
                                                            class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                                            <div
                                                                class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                <div
                                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="{{ asset('assets') }}/dist/images/projects/project2-400x400.jpg"
                                                                        alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div
                                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="{{ asset('assets') }}/dist/images/projects/project2-400x400.jpg"
                                                                        alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div
                                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="{{ asset('assets') }}/dist/images/projects/project10-400x400.jpg"
                                                                        alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Thu Jul 2020
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                    href="#">
                                                    <div>
                                                        <div
                                                            class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Task completed: Review Project
                                                            Proposal</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Reviewed and provided feedback
                                                        </div>
                                                        <div
                                                            class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                                            <div
                                                                class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                <div
                                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="{{ asset('assets') }}/dist/images/projects/project9-400x400.jpg"
                                                                        alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div
                                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="{{ asset('assets') }}/dist/images/projects/project7-400x400.jpg"
                                                                        alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div
                                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="{{ asset('assets') }}/dist/images/projects/project8-400x400.jpg"
                                                                        alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Mon Dec 2021
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                    href="#">
                                                    <div>
                                                        <div
                                                            class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Received 5 new emails</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Inbox updates
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Thu Aug 2022
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                    href="#">
                                                    <div>
                                                        <div
                                                            class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Logged in successfully</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Accessed the dashboard
                                                        </div>
                                                        <div
                                                            class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                                            <div
                                                                class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                <div
                                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="{{ asset('assets') }}/dist/images/projects/project6-400x400.jpg"
                                                                        alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div
                                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="{{ asset('assets') }}/dist/images/projects/project8-400x400.jpg"
                                                                        alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div
                                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="{{ asset('assets') }}/dist/images/projects/project1-400x400.jpg"
                                                                        alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Fri Mar 2022
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                    href="#">
                                                    <div>
                                                        <div
                                                            class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Logged out</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Signed out from the dashboard
                                                        </div>
                                                        <div
                                                            class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                                            <div
                                                                class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                <div
                                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="{{ asset('assets') }}/dist/images/projects/project3-400x400.jpg"
                                                                        alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div
                                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="{{ asset('assets') }}/dist/images/projects/project5-400x400.jpg"
                                                                        alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div
                                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="{{ asset('assets') }}/dist/images/projects/project9-400x400.jpg"
                                                                        alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Sun Jul 2022
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                    href="#">
                                                    <div>
                                                        <div
                                                            class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Uploaded presentations</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Added slides for the team meeting
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Tue Jun 2020
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                    href="#">
                                                    <div>
                                                        <div
                                                            class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Uploaded audio recordings</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Recorded podcast episodes
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Thu Apr 2022
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                    href="#">
                                                    <div>
                                                        <div
                                                            class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Uploaded video files</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Shared video tutorials
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Fri Aug 2021
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                    href="#">
                                                    <div>
                                                        <div
                                                            class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Uploaded images</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Added project screenshots
                                                        </div>
                                                        <div
                                                            class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                                            <div
                                                                class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                <div
                                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="{{ asset('assets') }}/dist/images/projects/project10-400x400.jpg"
                                                                        alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div
                                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="{{ asset('assets') }}/dist/images/projects/project2-400x400.jpg"
                                                                        alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                                <div
                                                                    class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                    <img src="{{ asset('assets') }}/dist/images/projects/project1-400x400.jpg"
                                                                        alt="Tailwise - Admin Dashboard Template">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Mon Jul 2020
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                    href="#">
                                                    <div>
                                                        <div
                                                            class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Posted a status update</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Shared thoughts on the project
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Fri Apr 2020
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                    href="#">
                                                    <div>
                                                        <div
                                                            class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Added a new contact</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Added a new contact, Sarah
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Wed Jan 2022
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                    href="#">
                                                    <div>
                                                        <div
                                                            class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Uploaded documents</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Uploaded important project documents
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Mon Nov 2020
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                    </div>
                                                </a>
                                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                    href="#">
                                                    <div>
                                                        <div
                                                            class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                            <img src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                                                alt="Tailwise - Admin Dashboard Template">
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-5">
                                                        <div class="font-medium">Uploaded code files</div>
                                                        <div class="mt-0.5 text-slate-500">
                                                            Added new code modules
                                                        </div>
                                                        <div class="mt-1.5 text-xs text-slate-500">
                                                            Sun Apr 2021
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Notification & User Menu -->
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="content transition-[margin,width] duration-100 xl:pl-3.5 pt-[65px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
                <div class="mt-14 px-5">
                    <div class="container">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: Vendor JS Assets-->
    @include('components.script')
    <!-- END: Vendor JS Assets-->
    <!-- BEGIN: Pages, layouts, components JS Assets-->
    <!-- END: Pages, layouts, components JS Assets-->
</body>

</html>
