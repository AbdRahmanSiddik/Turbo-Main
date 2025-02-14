@extends('layout.template')

@section('breadcrumb')
    <nav aria-label="breadcrumb" class="flex hidden flex-1 xl:block">
        <ol class="flex items-center text-theme-1 dark:text-slate-300">
            <li class="">
                <a href="/">Home</a>
            </li>
            <li
                class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-slate-600 cursor-text dark:text-slate-400">
                <a href="#">Dashboard</a>
            </li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
        <div class="col-span-12">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium group-[.mode--light]:text-white">
                        Project Statistic
                    </div>
                    <ul data-tw-merge="" role="tablist"
                        class="p-0.5 border dark:border-darkmode-400 flex box w-auto rounded-[0.6rem] border-slate-200 bg-white group-[.mode--light]:!border-transparent group-[.mode--light]:!bg-white/[0.12] md:ml-auto">
                        <li id="example-1-tab" data-tw-merge="" role="presentation"
                            class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] group-[.mode--light]:bg-transparent [&_button.active]:text-current group-[.mode--light]:[&_button.active]:border-transparent group-[.mode--light]:[&_button.active]:bg-white/[0.12]">
                            <button data-tw-merge="" data-tw-target="#example-1" role="tab"
                                class="cursor-pointer block appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 py-1.5 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 active w-full whitespace-nowrap rounded-[0.6rem] text-slate-500 group-[.mode--light]:text-slate-200 md:w-24">Daily</button>
                        </li>
                        <li id="example-2-tab" data-tw-merge="" role="presentation"
                            class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] group-[.mode--light]:bg-transparent [&_button.active]:text-current group-[.mode--light]:[&_button.active]:border-transparent group-[.mode--light]:[&_button.active]:bg-white/[0.12]">
                            <button data-tw-merge="" data-tw-target="#example-2" role="tab"
                                class="cursor-pointer block appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 py-1.5 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 w-full whitespace-nowrap rounded-[0.6rem] text-slate-500 group-[.mode--light]:text-slate-200 md:w-24">Monthly</button>
                        </li>
                        <li id="example-3-tab" data-tw-merge="" role="presentation"
                            class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] group-[.mode--light]:bg-transparent [&_button.active]:text-current group-[.mode--light]:[&_button.active]:border-transparent group-[.mode--light]:[&_button.active]:bg-white/[0.12]">
                            <button data-tw-merge="" data-tw-target="#example-3" role="tab"
                                class="cursor-pointer block appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 py-1.5 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 w-full whitespace-nowrap rounded-[0.6rem] text-slate-500 group-[.mode--light]:text-slate-200 md:w-24">Yearly</button>
                        </li>
                    </ul>
                </div>
                <div class="tab-content box box--stacked mt-3.5">
                    <div data-transition="" data-selector=".active"
                        data-enter="transition-[visibility,opacity] ease-linear duration-150"
                        data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100"
                        data-leave="transition-[visibility,opacity] ease-linear duration-150"
                        data-leave-from="visible opacity-100" data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0"
                        id="example-1" role="tabpanel" aria-labelledby="example-1-tab"
                        class="tab-pane active flex flex-col gap-2 p-1.5 leading-relaxed xl:flex-row">
                        <div class="grid w-full grid-cols-4 gap-2">
                            <div
                                class="box relative col-span-4 flex-1 overflow-hidden rounded-[0.6rem] border-0 border-slate-200/60 bg-slate-50 bg-gradient-to-b from-theme-2/90 to-theme-1/[0.85] p-5 before:absolute before:right-0 before:top-0 before:-mr-[62%] before:h-[130%] before:w-full before:rotate-45 before:bg-gradient-to-b before:from-black/[0.15] before:to-transparent before:content-[''] sm:col-span-2 xl:col-span-1">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-full border border-white/10 bg-white/10">
                                    <i data-tw-merge="" data-lucide="database"
                                        class="stroke-[1] h-6 w-6 fill-white/10 text-white"></i>
                                </div>
                                <div class="mt-12 flex items-center">
                                    <div class="text-2xl font-medium text-white">
                                        247,220
                                    </div>
                                    <div
                                        class="ml-3.5 flex items-center rounded-full border border-success/50 bg-success/50 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                        12%
                                        <i data-tw-merge="" data-lucide="chevron-up" class="ml-px h-4 w-4 stroke-[1.5]"></i>
                                    </div>
                                </div>
                                <div class="mt-1 text-base text-white/70">
                                    Customer Engagement
                                </div>
                                <div data-tw-merge="" data-tw-placement="bottom-end"
                                    class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown"
                                        aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i
                                            data-tw-merge="" data-lucide="more-vertical"
                                            class="stroke-[1] h-6 w-6 fill-white/70 stroke-white/70"></i>
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
                                            class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                            <a
                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                    data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                                                Copy
                                                Link</a>
                                            <a
                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                    data-tw-merge="" data-lucide="trash"
                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="relative col-span-4 flex-1 overflow-hidden rounded-[0.6rem] border bg-slate-50/50 p-5 sm:col-span-2 xl:col-span-1">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                    <i data-tw-merge="" data-lucide="app-window"
                                        class="stroke-[1] h-6 w-6 fill-primary/10 text-primary"></i>
                                </div>
                                <div class="mt-12 flex items-center">
                                    <div class="text-2xl font-medium">124,625</div>
                                    <div
                                        class="ml-3.5 flex items-center rounded-full border border-danger/50 bg-danger/70 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                        3%
                                        <i data-tw-merge="" data-lucide="chevron-down"
                                            class="ml-px h-4 w-4 stroke-[1.5]"></i>
                                    </div>
                                </div>
                                <div class="mt-1 text-base text-slate-500">
                                    Lead Generation
                                </div>
                                <div data-tw-merge="" data-tw-placement="bottom-end"
                                    class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown"
                                        aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i
                                            data-tw-merge="" data-lucide="more-vertical"
                                            class="stroke-[1] h-6 w-6 fill-slate-400/70 stroke-slate-400/70"></i>
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
                                            class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                            <a
                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                    data-tw-merge="" data-lucide="copy"
                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                Copy
                                                Link</a>
                                            <a
                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                    data-tw-merge="" data-lucide="trash"
                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="relative col-span-4 flex-1 overflow-hidden rounded-[0.6rem] border bg-slate-50/50 p-5 sm:col-span-2 xl:col-span-1">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-full border border-info/10 bg-info/10">
                                    <i data-tw-merge="" data-lucide="box"
                                        class="stroke-[1] h-6 w-6 fill-info/10 text-info"></i>
                                </div>
                                <div class="mt-12 flex items-center">
                                    <div class="text-2xl font-medium">749,220</div>
                                    <div
                                        class="ml-3.5 flex items-center rounded-full border border-success/50 bg-success/70 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                        4%
                                        <i data-tw-merge="" data-lucide="chevron-up"
                                            class="ml-px h-4 w-4 stroke-[1.5]"></i>
                                    </div>
                                </div>
                                <div class="mt-1 text-base text-slate-500">
                                    Support Tickets
                                </div>
                                <div data-tw-merge="" data-tw-placement="bottom-end"
                                    class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown"
                                        aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i
                                            data-tw-merge="" data-lucide="more-vertical"
                                            class="stroke-[1] h-6 w-6 fill-slate-400/70 stroke-slate-400/70"></i>
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
                                            class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                            <a
                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                    data-tw-merge="" data-lucide="copy"
                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                Copy
                                                Link</a>
                                            <a
                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                    data-tw-merge="" data-lucide="trash"
                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="relative col-span-4 flex-1 overflow-hidden rounded-[0.6rem] border bg-slate-50/50 p-5 sm:col-span-2 xl:col-span-1">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-full border border-primary/10 bg-primary/10">
                                    <i data-tw-merge="" data-lucide="layout"
                                        class="stroke-[1] h-6 w-6 fill-primary/10 text-primary"></i>
                                </div>
                                <div class="mt-12 flex items-center">
                                    <div class="text-2xl font-medium">273,235</div>
                                    <div
                                        class="ml-3.5 flex items-center rounded-full border border-success/50 bg-success/70 py-[2px] pl-[7px] pr-1 text-xs font-medium text-white/90">
                                        9%
                                        <i data-tw-merge="" data-lucide="chevron-up"
                                            class="ml-px h-4 w-4 stroke-[1.5]"></i>
                                    </div>
                                </div>
                                <div class="mt-1 text-base text-slate-500">
                                    Pipeline Management
                                </div>
                                <div data-tw-merge="" data-tw-placement="bottom-end"
                                    class="dropdown absolute right-0 top-0 mr-5 mt-5"><button data-tw-toggle="dropdown"
                                        aria-expanded="false" class="cursor-pointer h-5 w-5 text-slate-500"><i
                                            data-tw-merge="" data-lucide="more-vertical"
                                            class="stroke-[1] h-6 w-6 fill-slate-400/70 stroke-slate-400/70"></i>
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
                                            class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                            <a
                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                    data-tw-merge="" data-lucide="copy"
                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                Copy
                                                Link</a>
                                            <a
                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                    data-tw-merge="" data-lucide="trash"
                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="flex flex-col items-center justify-center rounded-[0.6rem] border border-dashed border-slate-300/80 bg-slate-50 p-5 text-slate-400/80 hover:bg-slate-50 xl:w-20 [&:hover_svg]:rotate-180"
                            href="#">
                            <i data-tw-merge="" data-lucide="plus-square"
                                class="stroke-[1] h-6 w-6 transform transition-transform"></i>
                        </a>
                    </div>
                    <div data-transition="" data-selector=".active"
                        data-enter="transition-[visibility,opacity] ease-linear duration-150"
                        data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0"
                        data-enter-to="visible opacity-100"
                        data-leave="transition-[visibility,opacity] ease-linear duration-150"
                        data-leave-from="visible opacity-100"
                        data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-2" role="tabpanel"
                        aria-labelledby="example-2-tab" class="tab-pane p-5 leading-relaxed"></div>
                    <div data-transition="" data-selector=".active"
                        data-enter="transition-[visibility,opacity] ease-linear duration-150"
                        data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0"
                        data-enter-to="visible opacity-100"
                        data-leave="transition-[visibility,opacity] ease-linear duration-150"
                        data-leave-from="visible opacity-100"
                        data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-3" role="tabpanel"
                        aria-labelledby="example-3-tab" class="tab-pane p-5 leading-relaxed"></div>
                </div>
            </div>
        </div>
        <div class="col-span-12 flex flex-col gap-y-10 xl:col-span-6">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">Contact Details</div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div
                        class="mb-5 flex flex-col items-center gap-y-2 border-b border-dashed border-slate-300/70 pb-5 sm:flex-row">
                        <div class="image-fit h-14 w-14 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                            <img src="{{ asset('assets') }}/dist/images/users/user6-50x50.jpg"
                                alt="Tailwise - Admin Dashboard Template">
                        </div>
                        <div class="text-center sm:ml-4 sm:text-left">
                            <div class="text-base font-medium">
                                Jennifer Lawrence
                            </div>
                            <div class="mt-0.5 text-slate-500">
                                CRM Administrator
                            </div>
                        </div>
                        <div
                            class="flex items-center rounded-full border border-success/10 bg-success/10 px-3 py-1 font-medium text-success sm:ml-auto">
                            <div class="mr-2 h-1.5 w-1.5 rounded-full border border-success/50 bg-success/50">
                            </div>
                            High priority
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-3 text-center sm:flex-row">
                        <div class="flex-1 border-dashed last:border-0 sm:border-r">
                            <div class="text-slate-500">Leads Generated</div>
                            <div class="mt-1 flex items-center justify-center">
                                <div class="text-base font-medium">2,176</div>
                                <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                    11%
                                    <i data-tw-merge="" data-lucide="chevron-up" class="stroke-[1] ml-px h-4 w-4"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 border-dashed last:border-0 sm:border-r">
                            <div class="text-slate-500">Deals Closed</div>
                            <div class="mt-1 flex items-center justify-center">
                                <div class="text-base font-medium">2,027</div>
                                <div class="-mr-1 ml-2 flex items-center text-xs text-success">
                                    2%
                                    <i data-tw-merge="" data-lucide="chevron-up" class="stroke-[1] ml-px h-4 w-4"></i>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1 border-dashed last:border-0 sm:border-r">
                            <div class="text-slate-500">Meetings Scheduled</div>
                            <div class="mt-1 flex items-center justify-center">
                                <div class="text-base font-medium">342</div>
                                <div class="-mr-1 ml-2 flex items-center text-xs text-danger">
                                    4%
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] ml-px h-4 w-4"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">Invite Team Member</div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="mb-5 border-b border-dashed border-slate-300/70 pb-5">
                        <div>Everyone at project can access this file</div>
                        <div class="relative mt-3">
                            <input data-tw-merge="" type="text" placeholder="everyone@gmail.com"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 sm:py-3">
                            <button data-tw-merge=""
                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-xs py-1.5 px-2 dark:border-primary inset-y-0 right-0 my-auto mr-2 mt-2 h-9 w-full border-primary/20 bg-primary/10 pl-3.5 pr-4 text-primary hover:bg-primary/20 sm:absolute sm:mt-auto sm:h-8 sm:w-auto"><i
                                    data-tw-merge="" data-lucide="send" class="mr-1.5 h-3.5 w-3.5 stroke-[1.3]"></i>
                                Send Invitation</button>
                        </div>
                    </div>
                    <div class="mb-5 flex flex-col gap-5 border-b border-dashed border-slate-300/70 pb-5">
                        <div class="flex items-center gap-3.5">
                            <div>
                                <div
                                    class="image-fit h-12 w-12 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                    <img src="{{ asset('assets') }}/dist/images/users/user6-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template">
                                </div>
                            </div>
                            <div class="flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                <div>
                                    <div class="font-medium">Jennifer Lawrence</div>
                                    <div class="mt-0.5 text-xs text-slate-500">
                                        jennifer.lawrence@left4code.com
                                    </div>
                                </div>
                                <div class="relative sm:ml-auto">
                                    <i data-tw-merge="" data-lucide="settings"
                                        class="absolute inset-y-0 my-auto ml-2.5 h-3.5 w-3.5 stroke-[1.2]"></i>
                                    <select data-tw-merge=""
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full border-slate-200 shadow-sm rounded-md px-3 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 bg-[length:15px_auto] py-1.5 pl-8 pr-2.5 text-xs sm:w-48">
                                        <option value="CRM Administrator">
                                            CRM Administrator
                                        </option>
                                        <option value="Project Manager">
                                            Project Manager
                                        </option>
                                        <option value="Support Specialist">
                                            Support Specialist
                                        </option>
                                        <option value="Sales Manager">
                                            Sales Manager
                                        </option>
                                        <option value="Marketing Coordinator">
                                            Marketing Coordinator
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3.5">
                            <div>
                                <div
                                    class="image-fit h-12 w-12 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                    <img src="{{ asset('assets') }}/dist/images/users/user8-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template">
                                </div>
                            </div>
                            <div class="flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                <div>
                                    <div class="font-medium">Cate Blanchett</div>
                                    <div class="mt-0.5 text-xs text-slate-500">
                                        cate.blanchett@left4code.com
                                    </div>
                                </div>
                                <div class="relative sm:ml-auto">
                                    <i data-tw-merge="" data-lucide="settings"
                                        class="absolute inset-y-0 my-auto ml-2.5 h-3.5 w-3.5 stroke-[1.2]"></i>
                                    <select data-tw-merge=""
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full border-slate-200 shadow-sm rounded-md px-3 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 bg-[length:15px_auto] py-1.5 pl-8 pr-2.5 text-xs sm:w-48">
                                        <option value="CRM Administrator">
                                            CRM Administrator
                                        </option>
                                        <option value="Project Manager">
                                            Project Manager
                                        </option>
                                        <option value="Support Specialist">
                                            Support Specialist
                                        </option>
                                        <option value="Sales Manager">
                                            Sales Manager
                                        </option>
                                        <option value="Marketing Coordinator">
                                            Marketing Coordinator
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3.5">
                            <div>
                                <div
                                    class="image-fit h-12 w-12 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                    <img src="{{ asset('assets') }}/dist/images/users/user3-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template">
                                </div>
                            </div>
                            <div class="flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                <div>
                                    <div class="font-medium">Leonardo DiCaprio</div>
                                    <div class="mt-0.5 text-xs text-slate-500">
                                        leonardo.dicaprio@left4code.com
                                    </div>
                                </div>
                                <div class="relative sm:ml-auto">
                                    <i data-tw-merge="" data-lucide="settings"
                                        class="absolute inset-y-0 my-auto ml-2.5 h-3.5 w-3.5 stroke-[1.2]"></i>
                                    <select data-tw-merge=""
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full border-slate-200 shadow-sm rounded-md px-3 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 bg-[length:15px_auto] py-1.5 pl-8 pr-2.5 text-xs sm:w-48">
                                        <option value="CRM Administrator">
                                            CRM Administrator
                                        </option>
                                        <option value="Project Manager">
                                            Project Manager
                                        </option>
                                        <option value="Support Specialist">
                                            Support Specialist
                                        </option>
                                        <option value="Sales Manager">
                                            Sales Manager
                                        </option>
                                        <option value="Marketing Coordinator">
                                            Marketing Coordinator
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3.5">
                            <div>
                                <div
                                    class="image-fit h-12 w-12 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                    <img src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template">
                                </div>
                            </div>
                            <div class="flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                <div>
                                    <div class="font-medium">Tom Hanks</div>
                                    <div class="mt-0.5 text-xs text-slate-500">
                                        tom.hanks@left4code.com
                                    </div>
                                </div>
                                <div class="relative sm:ml-auto">
                                    <i data-tw-merge="" data-lucide="settings"
                                        class="absolute inset-y-0 my-auto ml-2.5 h-3.5 w-3.5 stroke-[1.2]"></i>
                                    <select data-tw-merge=""
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full border-slate-200 shadow-sm rounded-md px-3 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 bg-[length:15px_auto] py-1.5 pl-8 pr-2.5 text-xs sm:w-48">
                                        <option value="CRM Administrator">
                                            CRM Administrator
                                        </option>
                                        <option value="Project Manager">
                                            Project Manager
                                        </option>
                                        <option value="Support Specialist">
                                            Support Specialist
                                        </option>
                                        <option value="Sales Manager">
                                            Sales Manager
                                        </option>
                                        <option value="Marketing Coordinator">
                                            Marketing Coordinator
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3.5">
                            <div>
                                <div
                                    class="image-fit h-12 w-12 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                    <img src="{{ asset('assets') }}/dist/images/users/user2-50x50.jpg"
                                        alt="Tailwise - Admin Dashboard Template">
                                </div>
                            </div>
                            <div class="flex w-full flex-col gap-y-2.5 sm:flex-row sm:items-center">
                                <div>
                                    <div class="font-medium">Meryl Streep</div>
                                    <div class="mt-0.5 text-xs text-slate-500">
                                        meryl.streep@left4code.com
                                    </div>
                                </div>
                                <div class="relative sm:ml-auto">
                                    <i data-tw-merge="" data-lucide="settings"
                                        class="absolute inset-y-0 my-auto ml-2.5 h-3.5 w-3.5 stroke-[1.2]"></i>
                                    <select data-tw-merge=""
                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full border-slate-200 shadow-sm rounded-md px-3 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 bg-[length:15px_auto] py-1.5 pl-8 pr-2.5 text-xs sm:w-48">
                                        <option value="CRM Administrator">
                                            CRM Administrator
                                        </option>
                                        <option value="Project Manager">
                                            Project Manager
                                        </option>
                                        <option value="Support Specialist">
                                            Support Specialist
                                        </option>
                                        <option value="Sales Manager">
                                            Sales Manager
                                        </option>
                                        <option value="Marketing Coordinator">
                                            Marketing Coordinator
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>Share invitation link</div>
                        <div class="mt-3 flex gap-3">
                            <input data-tw-merge="" type="text"
                                value="https://left4code.com/invitation?token=abcdefgh12345678"
                                placeholder="everyone@gmail.com" disabled="disabled"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 text-slate-500">
                            <button data-tw-merge="" data-placement="top" title="Copy link"
                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 tooltip"><i
                                    data-tw-merge="" data-lucide="copy" class="h-4 w-4 stroke-[1.5]"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 flex flex-col gap-y-10 xl:col-span-6">
            <div>
                <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">Team Collaboration</div>
                </div>
                <div class="box box--stacked mt-3.5 p-5">
                    <div class="mb-5 border-b border-dashed border-slate-300/70 pb-5">
                        <div>Collaboration progress report</div>
                        <div
                            class="mt-3 flex w-full items-center rounded-lg border border-success/10 bg-success/10 px-3 py-3 text-success">
                            <i data-tw-merge="" data-lucide="clock" class="stroke-[1] w-5 h-5 mr-2"></i>
                            Project kick-off date:
                            <div class="ml-2">Sun Feb 2021</div>
                        </div>
                        <div class="mt-5 flex flex-col gap-4">
                            <div class="flex flex-col items-center gap-y-2 sm:flex-row">
                                <div class="text-slate-500 sm:w-36">Project Name</div>
                                <div class="flex items-center font-medium sm:ml-5 sm:h-7">
                                    Brand Ballet: Dancing into Spring - 2043
                                </div>
                            </div>
                            <div class="flex flex-col items-center gap-y-2 sm:flex-row">
                                <div class="text-slate-500 sm:w-36">Project Manager</div>
                                <div class="flex h-5 items-center sm:ml-5">
                                    <div
                                        class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                    <div
                                        class="ml-2.5 underline decoration-primary/30 decoration-dotted underline-offset-[3px]">
                                        Tom Hanks
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center gap-y-2 sm:flex-row">
                                <div class="text-slate-500 sm:w-36">
                                    Creative Director
                                </div>
                                <div class="flex items-center sm:ml-5 sm:h-7">
                                    <div
                                        class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                        <img src="{{ asset('assets') }}/dist/images/users/user10-50x50.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                    <div
                                        class="ml-2.5 underline decoration-primary/30 decoration-dotted underline-offset-[3px]">
                                        Julia Roberts
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div
                            class="flex w-full items-center rounded-lg border bg-slate-50 px-3 py-3 font-medium text-slate-500">
                            <i data-tw-merge="" data-lucide="kanban-square" class="w-5 h-5 mr-2 stroke-[1.3]"></i>
                            Project Details for Team Members
                            <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative ml-auto"><a
                                    data-tw-toggle="dropdown" aria-expanded="false" href="javascript:;"
                                    class="cursor-pointer"><i data-tw-merge="" data-lucide="more-vertical"
                                        class="stroke-[1] w-5 h-5 fill-slate-500/70 stroke-slate-500/70"></i>
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
                                                data-tw-merge="" data-lucide="copy" class="stroke-[1] mr-2 h-4 w-4"></i>
                                            Copy Link</a>
                                        <a
                                            class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                data-tw-merge="" data-lucide="trash" class="stroke-[1] mr-2 h-4 w-4"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 flex flex-col gap-3">
                            <div
                                class="relative flex flex-col items-center gap-5 rounded-lg border border-dashed border-slate-300/60 p-3 sm:flex-row">
                                <div class="absolute right-0 top-0 mr-3 mt-3">
                                    <input data-tw-merge="" type="checkbox"
                                        class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 border">
                                </div>
                                <div>
                                    <div class="image-fit h-24 w-40 rounded-md border-[3px] border-slate-200/70">
                                        <img class="rounded-md saturate-[0.7]"
                                            src="{{ asset('assets') }}/dist/images/projects/project10-400x400.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="-mt-1">
                                    <a class="block text-center font-medium sm:text-left" href="#">
                                        Sales Presentation Deck
                                    </a>
                                    <div class="mt-2.5 flex items-center text-xs text-slate-500 dark:text-slate-500">
                                        <i data-tw-merge="" data-lucide="link" class="mr-1.5 h-2.5 w-2.5 stroke-[2]"></i>
                                        <a class="truncate underline decoration-slate-300 decoration-dotted underline-offset-[3px]"
                                            href="#">
                                            http://left4code.com/share/sLa4uTvLg0
                                        </a>
                                    </div>
                                    <div class="mt-4 flex items-center justify-center sm:justify-start">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-6 w-6">
                                                <img data-placement="top" title="Jennifer Lawrence"
                                                    src="{{ asset('assets') }}/dist/images/users/user6-50x50.jpg"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                    class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                                <img data-placement="top" title="Leonardo DiCaprio"
                                                    src="{{ asset('assets') }}/dist/images/users/user3-50x50.jpg"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                    class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                                <img data-placement="top" title="Denzel Washington"
                                                    src="{{ asset('assets') }}/dist/images/users/user9-50x50.jpg"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                    class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                        <div class="ml-3 text-xs text-slate-500">
                                            4+ Members
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="relative flex flex-col items-center gap-5 rounded-lg border border-dashed border-slate-300/60 p-3 sm:flex-row">
                                <div class="absolute right-0 top-0 mr-3 mt-3">
                                    <input data-tw-merge="" checked="" type="checkbox"
                                        class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 border">
                                </div>
                                <div>
                                    <div class="image-fit h-24 w-40 rounded-md border-[3px] border-slate-200/70">
                                        <img class="rounded-md saturate-[0.7]"
                                            src="{{ asset('assets') }}/dist/images/projects/project7-400x400.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="-mt-1">
                                    <a class="block text-center font-medium sm:text-left" href="#">
                                        Video Advertisements
                                    </a>
                                    <div class="mt-2.5 flex items-center text-xs text-slate-500 dark:text-slate-500">
                                        <i data-tw-merge="" data-lucide="link" class="mr-1.5 h-2.5 w-2.5 stroke-[2]"></i>
                                        <a class="truncate underline decoration-slate-300 decoration-dotted underline-offset-[3px]"
                                            href="#">
                                            http://left4code.com/share/URNaerbSpE
                                        </a>
                                    </div>
                                    <div class="mt-4 flex items-center justify-center sm:justify-start">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-6 w-6">
                                                <img data-placement="top" title="Denzel Washington"
                                                    src="{{ asset('assets') }}/dist/images/users/user9-50x50.jpg"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                    class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                                <img data-placement="top" title="Angelina Jolie"
                                                    src="{{ asset('assets') }}/dist/images/users/user4-50x50.jpg"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                    class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                                <img data-placement="top" title="Johnny Depp"
                                                    src="{{ asset('assets') }}/dist/images/users/user7-50x50.jpg"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                    class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                        <div class="ml-3 text-xs text-slate-500">
                                            4+ Members
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="relative flex flex-col items-center gap-5 rounded-lg border border-dashed border-slate-300/60 p-3 sm:flex-row">
                                <div class="absolute right-0 top-0 mr-3 mt-3">
                                    <input data-tw-merge="" checked="" type="checkbox"
                                        class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 border">
                                </div>
                                <div>
                                    <div class="image-fit h-24 w-40 rounded-md border-[3px] border-slate-200/70">
                                        <img class="rounded-md saturate-[0.7]"
                                            src="{{ asset('assets') }}/dist/images/projects/project4-400x400.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="-mt-1">
                                    <a class="block text-center font-medium sm:text-left" href="#">
                                        Content Calendar
                                    </a>
                                    <div class="mt-2.5 flex items-center text-xs text-slate-500 dark:text-slate-500">
                                        <i data-tw-merge="" data-lucide="link" class="mr-1.5 h-2.5 w-2.5 stroke-[2]"></i>
                                        <a class="truncate underline decoration-slate-300 decoration-dotted underline-offset-[3px]"
                                            href="#">
                                            http://left4code.com/share/QuFMynLPX7
                                        </a>
                                    </div>
                                    <div class="mt-4 flex items-center justify-center sm:justify-start">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-6 w-6">
                                                <img data-placement="top" title="Tom Hanks"
                                                    src="{{ asset('assets') }}/dist/images/users/user1-50x50.jpg"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                    class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                                <img data-placement="top" title="Julia Roberts"
                                                    src="{{ asset('assets') }}/dist/images/users/user10-50x50.jpg"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                    class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                                <img data-placement="top" title="Brad Pitt"
                                                    src="{{ asset('assets') }}/dist/images/users/user5-50x50.jpg"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                    class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                        <div class="ml-3 text-xs text-slate-500">
                                            4+ Members
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="relative flex flex-col items-center gap-5 rounded-lg border border-dashed border-slate-300/60 p-3 sm:flex-row">
                                <div class="absolute right-0 top-0 mr-3 mt-3">
                                    <input data-tw-merge="" type="checkbox"
                                        class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 border">
                                </div>
                                <div>
                                    <div class="image-fit h-24 w-40 rounded-md border-[3px] border-slate-200/70">
                                        <img class="rounded-md saturate-[0.7]"
                                            src="{{ asset('assets') }}/dist/images/projects/project2-400x400.jpg"
                                            alt="Tailwise - Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="-mt-1">
                                    <a class="block text-center font-medium sm:text-left" href="#">
                                        Social Media Graphics
                                    </a>
                                    <div class="mt-2.5 flex items-center text-xs text-slate-500 dark:text-slate-500">
                                        <i data-tw-merge="" data-lucide="link" class="mr-1.5 h-2.5 w-2.5 stroke-[2]"></i>
                                        <a class="truncate underline decoration-slate-300 decoration-dotted underline-offset-[3px]"
                                            href="#">
                                            http://left4code.com/share/1MeSNWcKNl
                                        </a>
                                    </div>
                                    <div class="mt-4 flex items-center justify-center sm:justify-start">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-6 w-6">
                                                <img data-placement="top" title="Johnny Depp"
                                                    src="{{ asset('assets') }}/dist/images/users/user7-50x50.jpg"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                    class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                                <img data-placement="top" title="Brad Pitt"
                                                    src="{{ asset('assets') }}/dist/images/users/user5-50x50.jpg"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                    class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-2.5 h-6 w-6">
                                                <img data-placement="top" title="Julia Roberts"
                                                    src="{{ asset('assets') }}/dist/images/users/user10-50x50.jpg"
                                                    alt="Tailwise - Admin Dashboard Template"
                                                    class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                        <div class="ml-3 text-xs text-slate-500">
                                            4+ Members
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
